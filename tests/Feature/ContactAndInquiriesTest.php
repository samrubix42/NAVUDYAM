<?php

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('contact page renders successfully', function () {
    $this->get('/contact')
        ->assertStatus(200)
        ->assertSee('Join Hands with NAVUDYAM')
        ->assertSee('Phone / WhatsApp');
});

test('phone, subject, and message are required while name and email are optional', function () {
    Livewire::test('pages::contact')
        ->set('name', '')
        ->set('email', '')
        ->set('phone', '')
        ->set('subject', '')
        ->set('message', '')
        ->call('submitContact')
        ->assertHasErrors(['phone', 'subject', 'message'])
        ->assertHasNoErrors(['name', 'email']);
});

test('visitor can submit contact with only required fields (name and email omitted)', function () {
    Livewire::test('pages::contact')
        ->set('name', '')
        ->set('email', '')
        ->set('phone', '+91 98765 00000')
        ->set('subject', 'Question about Learning Circles')
        ->set('message', 'I want to know when the next learning circle meets.')
        ->call('submitContact')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    $this->assertDatabaseHas('contacts', [
        'name' => null,
        'email' => null,
        'phone' => '+91 98765 00000',
        'subject' => 'Question about Learning Circles',
        'message' => 'I want to know when the next learning circle meets.',
        'is_read' => false,
    ]);
});

test('visitor can submit contact with all fields including optional name and email', function () {
    Livewire::test('pages::contact')
        ->set('name', 'Priya Patil')
        ->set('email', 'priya.patil@example.com')
        ->set('phone', '+91 91234 56789')
        ->set('subject', 'Volunteering as a Mentor')
        ->set('message', 'I have 5 years experience in trade operations and want to volunteer.')
        ->call('submitContact')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    $this->assertDatabaseHas('contacts', [
        'name' => 'Priya Patil',
        'email' => 'priya.patil@example.com',
        'phone' => '+91 91234 56789',
        'subject' => 'Volunteering as a Mentor',
        'message' => 'I have 5 years experience in trade operations and want to volunteer.',
        'is_read' => false,
    ]);
});

test('guest is redirected away from admin contacts', function () {
    $this->get('/admin/contacts')
        ->assertRedirect('/login');
});

test('authenticated admin can view contacts list', function () {
    $user = User::factory()->create();
    $contact = Contact::create([
        'phone' => '+91 99999 88888',
        'subject' => 'Urgent Inquiry',
        'message' => 'Need help with registration.',
        'is_read' => false,
    ]);

    $this->actingAs($user)
        ->get('/admin/contacts')
        ->assertStatus(200)
        ->assertSee('Inquiries & Messages')
        ->assertSee('+91 99999 88888')
        ->assertSee('Urgent Inquiry');
});

test('admin can view contact and it is automatically marked as read', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $contact = Contact::create([
        'phone' => '+91 98888 77777',
        'subject' => 'New Partner Request',
        'message' => 'We want to partner for CSR initiative.',
        'is_read' => false,
    ]);

    Livewire::test('admin::contacts')
        ->call('viewContact', $contact->id)
        ->assertSet('showViewModal', true)
        ->assertSet('selectedContactId', $contact->id);

    expect($contact->fresh()->is_read)->toBeTrue();
});

test('admin can toggle read and unread status', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $contact = Contact::create([
        'phone' => '+91 97777 66666',
        'subject' => 'Question',
        'message' => 'General inquiry message.',
        'is_read' => true,
    ]);

    Livewire::test('admin::contacts')
        ->call('toggleRead', $contact->id)
        ->assertDispatched('toast');

    expect($contact->fresh()->is_read)->toBeFalse();

    Livewire::test('admin::contacts')
        ->call('toggleRead', $contact->id);

    expect($contact->fresh()->is_read)->toBeTrue();
});

test('admin can delete contact inquiry', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $contact = Contact::create([
        'phone' => '+91 96666 55555',
        'subject' => 'To be deleted',
        'message' => 'Delete this message please.',
        'is_read' => false,
    ]);

    Livewire::test('admin::contacts')
        ->call('confirmDelete', $contact->id)
        ->assertSet('showDeleteModal', true)
        ->call('delete')
        ->assertDispatched('toast');

    $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
});
