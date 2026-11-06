<div class="space-y-6">

    <!-- Page Header (shadcn style) -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-4 border-b border-zinc-200">
        <div>
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1.5 text-xs text-zinc-500 mb-1" aria-label="Breadcrumb">
                <span class="text-zinc-900 font-medium">Admin</span>
                <i class="ri-arrow-right-s-line text-zinc-400"></i>
                <span class="text-zinc-500">Dashboard</span>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                Dashboard
            </h1>
            <p class="text-xs text-zinc-500 mt-0.5">
                Real-time overview of NAVUDYAM applications, inquiries, events, and stories.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <a href="{{ route('home') }}" 
               target="_blank"
               class="inline-flex items-center justify-center gap-1.5 h-9 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 transition-colors">
                <i class="ri-external-link-line text-xs text-zinc-500"></i>
                <span>Public Site</span>
            </a>
            <a href="{{ route('admin.joins') }}" 
               class="inline-flex items-center justify-center gap-1.5 h-9 px-3.5 rounded-md text-xs font-semibold text-white bg-zinc-900 shadow-2xs hover:bg-zinc-800 transition-colors">
                <i class="ri-user-add-line text-xs"></i>
                <span>View Applications</span>
            </a>
        </div>
    </div>

    <!-- 4 Live Stats Cards (Clickable shadcn cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Stat Card 1: Join Applications -->
        <a href="{{ route('admin.joins') }}" 
           class="group bg-white border border-zinc-200 rounded-xl p-4 shadow-2xs hover:border-zinc-300 hover:shadow-xs transition-all block">
            <div class="flex items-center justify-between text-zinc-500 mb-2">
                <span class="text-xs font-medium text-zinc-600 group-hover:text-zinc-900 transition-colors">Join Applications</span>
                <div class="w-7 h-7 rounded-lg bg-zinc-100 group-hover:bg-amber-50 group-hover:text-amber-700 flex items-center justify-center transition-colors">
                    <i class="ri-user-add-line text-sm"></i>
                </div>
            </div>
            <div class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                {{ $totalJoins }}
            </div>
            <div class="mt-2 flex items-center justify-between text-[11px]">
                @if($unreadJoins > 0)
                    <span class="inline-flex items-center gap-1 text-amber-700 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                        <span>{{ $unreadJoins }} unread</span>
                    </span>
                @else
                    <span class="text-zinc-400">All caught up</span>
                @endif
                <span class="text-zinc-400 group-hover:text-zinc-700 transition-colors">Manage →</span>
            </div>
        </a>

        <!-- Stat Card 2: Total Inquiries -->
        <a href="{{ route('admin.contacts') }}" 
           class="group bg-white border border-zinc-200 rounded-xl p-4 shadow-2xs hover:border-zinc-300 hover:shadow-xs transition-all block">
            <div class="flex items-center justify-between text-zinc-500 mb-2">
                <span class="text-xs font-medium text-zinc-600 group-hover:text-zinc-900 transition-colors">Total Inquiries</span>
                <div class="w-7 h-7 rounded-lg bg-zinc-100 group-hover:bg-blue-50 group-hover:text-blue-700 flex items-center justify-center transition-colors">
                    <i class="ri-mail-open-line text-sm"></i>
                </div>
            </div>
            <div class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                {{ $totalInquiries }}
            </div>
            <div class="mt-2 flex items-center justify-between text-[11px]">
                @if($unreadInquiries > 0)
                    <span class="inline-flex items-center gap-1 text-amber-700 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                        <span>{{ $unreadInquiries }} unread</span>
                    </span>
                @else
                    <span class="text-zinc-400">All caught up</span>
                @endif
                <span class="text-zinc-400 group-hover:text-zinc-700 transition-colors">Manage →</span>
            </div>
        </a>

        <!-- Stat Card 3: Events & Sessions -->
        <a href="{{ route('admin.events') }}" 
           class="group bg-white border border-zinc-200 rounded-xl p-4 shadow-2xs hover:border-zinc-300 hover:shadow-xs transition-all block">
            <div class="flex items-center justify-between text-zinc-500 mb-2">
                <span class="text-xs font-medium text-zinc-600 group-hover:text-zinc-900 transition-colors">Events & Sessions</span>
                <div class="w-7 h-7 rounded-lg bg-zinc-100 group-hover:bg-emerald-50 group-hover:text-emerald-700 flex items-center justify-center transition-colors">
                    <i class="ri-calendar-event-line text-sm"></i>
                </div>
            </div>
            <div class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                {{ $totalEvents }}
            </div>
            <div class="mt-2 flex items-center justify-between text-[11px]">
                <span class="text-zinc-500 font-medium">
                    {{ $activeEvents }} published
                </span>
                <span class="text-zinc-400 group-hover:text-zinc-700 transition-colors">Manage →</span>
            </div>
        </a>

        <!-- Stat Card 4: Stories & Resources -->
        <a href="{{ route('admin.stories') }}" 
           class="group bg-white border border-zinc-200 rounded-xl p-4 shadow-2xs hover:border-zinc-300 hover:shadow-xs transition-all block">
            <div class="flex items-center justify-between text-zinc-500 mb-2">
                <span class="text-xs font-medium text-zinc-600 group-hover:text-zinc-900 transition-colors">Stories & Resources</span>
                <div class="w-7 h-7 rounded-lg bg-zinc-100 group-hover:bg-purple-50 group-hover:text-purple-700 flex items-center justify-center transition-colors">
                    <i class="ri-article-line text-sm"></i>
                </div>
            </div>
            <div class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                {{ $totalStories }}
            </div>
            <div class="mt-2 flex items-center justify-between text-[11px]">
                <span class="text-zinc-500 font-medium">
                    {{ $activeStories }} published
                </span>
                <span class="text-zinc-400 group-hover:text-zinc-700 transition-colors">Manage →</span>
            </div>
        </a>

    </div>

    <!-- Main Grid: Recent Applications & Inquiries + Sidebar Snapshot -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left Column: Tables (Col 8) -->
        <div class="lg:col-span-8 space-y-6">
            
            <!-- Recent Join Applications Table Card -->
            <div class="bg-white border border-zinc-200 rounded-xl shadow-2xs overflow-hidden">
                <div class="p-4 sm:px-5 sm:py-3.5 border-b border-zinc-200 flex items-center justify-between bg-zinc-50/50">
                    <div>
                        <h2 class="text-sm font-semibold text-zinc-900 font-heading">
                            Recent Join Applications
                        </h2>
                        <p class="text-[11px] text-zinc-500">
                            Submissions from students, mentors, entrepreneurs, and supporters.
                        </p>
                    </div>
                    <a href="{{ route('admin.joins') }}" class="text-xs font-medium text-zinc-600 hover:text-zinc-950 transition-colors">
                        View all ({{ $totalJoins }}) →
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="border-b border-zinc-200 bg-zinc-50/75 text-[11px] font-medium text-zinc-500 uppercase tracking-wider">
                                <th class="py-2.5 px-4">Applicant</th>
                                <th class="py-2.5 px-4 w-32">Role</th>
                                <th class="py-2.5 px-4 w-28">Status</th>
                                <th class="py-2.5 px-4 w-28">Date</th>
                                <th class="py-2.5 px-4 w-20 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-zinc-100">
                            @forelse($recentJoins as $join)
                                <tr class="hover:bg-zinc-50/60 transition-colors {{ !$join->is_read ? 'bg-amber-50/20' : '' }}">
                                    <td class="py-2.5 px-4">
                                        <div class="font-medium text-zinc-900 font-mono text-xs">
                                            {{ $join->phone }}
                                        </div>
                                        <div class="text-[11px] text-zinc-500 truncate">
                                            {{ $join->name ?: 'No name provided' }}
                                        </div>
                                    </td>
                                    <td class="py-2.5 px-4">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-zinc-100 text-zinc-700 capitalize border border-zinc-200">
                                            {{ $join->participation_type }}
                                        </span>
                                    </td>
                                    <td class="py-2.5 px-4">
                                        @if($join->is_read)
                                            <span class="inline-flex items-center gap-1 text-[11px] text-zinc-500">
                                                <i class="ri-check-line text-zinc-400"></i>
                                                <span>Read</span>
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-200/80">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                                <span>New</span>
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-2.5 px-4 text-zinc-500 text-[11px]">
                                        {{ $join->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="py-2.5 px-4 text-right">
                                        <a href="{{ route('admin.joins') }}" class="text-xs font-medium text-zinc-700 hover:text-zinc-950 hover:underline">
                                            Review
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-8 text-center text-xs text-zinc-400">
                                        No join applications submitted yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Inquiries Table Card -->
            <div class="bg-white border border-zinc-200 rounded-xl shadow-2xs overflow-hidden">
                <div class="p-4 sm:px-5 sm:py-3.5 border-b border-zinc-200 flex items-center justify-between bg-zinc-50/50">
                    <div>
                        <h2 class="text-sm font-semibold text-zinc-900 font-heading">
                            Recent Inquiries & Messages
                        </h2>
                        <p class="text-[11px] text-zinc-500">
                            Submissions received from the public contact form.
                        </p>
                    </div>
                    <a href="{{ route('admin.contacts') }}" class="text-xs font-medium text-zinc-600 hover:text-zinc-950 transition-colors">
                        View all ({{ $totalInquiries }}) →
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="border-b border-zinc-200 bg-zinc-50/75 text-[11px] font-medium text-zinc-500 uppercase tracking-wider">
                                <th class="py-2.5 px-4">Contact</th>
                                <th class="py-2.5 px-4">Subject</th>
                                <th class="py-2.5 px-4 w-28">Status</th>
                                <th class="py-2.5 px-4 w-28">Date</th>
                                <th class="py-2.5 px-4 w-20 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-zinc-100">
                            @forelse($recentContacts as $contact)
                                <tr class="hover:bg-zinc-50/60 transition-colors {{ !$contact->is_read ? 'bg-amber-50/20' : '' }}">
                                    <td class="py-2.5 px-4">
                                        <div class="font-medium text-zinc-900 font-mono text-xs">
                                            {{ $contact->phone }}
                                        </div>
                                        <div class="text-[11px] text-zinc-500 truncate">
                                            {{ $contact->name ?: 'Anonymous' }}
                                        </div>
                                    </td>
                                    <td class="py-2.5 px-4 text-zinc-800 font-medium truncate max-w-xs">
                                        {{ $contact->subject }}
                                    </td>
                                    <td class="py-2.5 px-4">
                                        @if($contact->is_read)
                                            <span class="inline-flex items-center gap-1 text-[11px] text-zinc-500">
                                                <i class="ri-check-line text-zinc-400"></i>
                                                <span>Read</span>
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-200/80">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                                <span>New</span>
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-2.5 px-4 text-zinc-500 text-[11px]">
                                        {{ $contact->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="py-2.5 px-4 text-right">
                                        <a href="{{ route('admin.contacts') }}" class="text-xs font-medium text-zinc-700 hover:text-zinc-950 hover:underline">
                                            Review
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-8 text-center text-xs text-zinc-400">
                                        No contact inquiries submitted yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Right Column: Quick Links & Upcoming Events (Col 4) -->
        <div class="lg:col-span-4 space-y-6">
            
            <!-- Quick Management Shortcuts -->
            <div class="bg-white border border-zinc-200 rounded-xl p-4 shadow-2xs space-y-3">
                <h3 class="text-xs font-semibold text-zinc-900 uppercase tracking-wider font-heading">
                    Quick Actions
                </h3>
                <div class="space-y-1.5 text-xs">
                    <a href="{{ route('admin.joins') }}" 
                       class="w-full px-3 py-2 font-medium text-zinc-700 hover:text-zinc-950 hover:bg-zinc-50 border border-zinc-200 rounded-lg flex items-center justify-between transition-colors">
                        <span class="flex items-center gap-2">
                            <i class="ri-user-add-line text-zinc-400"></i>
                            <span>Review Join Applications</span>
                        </span>
                        <i class="ri-arrow-right-line text-zinc-400 text-xs"></i>
                    </a>

                    <a href="{{ route('admin.contacts') }}" 
                       class="w-full px-3 py-2 font-medium text-zinc-700 hover:text-zinc-950 hover:bg-zinc-50 border border-zinc-200 rounded-lg flex items-center justify-between transition-colors">
                        <span class="flex items-center gap-2">
                            <i class="ri-mail-open-line text-zinc-400"></i>
                            <span>Review Messages</span>
                        </span>
                        <i class="ri-arrow-right-line text-zinc-400 text-xs"></i>
                    </a>

                    <a href="{{ route('admin.events') }}" 
                       class="w-full px-3 py-2 font-medium text-zinc-700 hover:text-zinc-950 hover:bg-zinc-50 border border-zinc-200 rounded-lg flex items-center justify-between transition-colors">
                        <span class="flex items-center gap-2">
                            <i class="ri-calendar-event-line text-zinc-400"></i>
                            <span>Manage Events</span>
                        </span>
                        <i class="ri-arrow-right-line text-zinc-400 text-xs"></i>
                    </a>

                    <a href="{{ route('admin.stories') }}" 
                       class="w-full px-3 py-2 font-medium text-zinc-700 hover:text-zinc-950 hover:bg-zinc-50 border border-zinc-200 rounded-lg flex items-center justify-between transition-colors">
                        <span class="flex items-center gap-2">
                            <i class="ri-article-line text-zinc-400"></i>
                            <span>Manage Stories</span>
                        </span>
                        <i class="ri-arrow-right-line text-zinc-400 text-xs"></i>
                    </a>

                    <a href="{{ route('admin.settings') }}" 
                       class="w-full px-3 py-2 font-medium text-zinc-700 hover:text-zinc-950 hover:bg-zinc-50 border border-zinc-200 rounded-lg flex items-center justify-between transition-colors">
                        <span class="flex items-center gap-2">
                            <i class="ri-settings-4-line text-zinc-400"></i>
                            <span>System Settings</span>
                        </span>
                        <i class="ri-arrow-right-line text-zinc-400 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Upcoming Events Snapshot -->
            <div class="bg-white border border-zinc-200 rounded-xl p-4 shadow-2xs space-y-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-semibold text-zinc-900 uppercase tracking-wider font-heading">
                        Upcoming Events
                    </h3>
                    <a href="{{ route('admin.events') }}" class="text-[11px] font-medium text-zinc-500 hover:text-zinc-900 transition-colors">
                        View all →
                    </a>
                </div>

                @if($upcomingEvents->count() > 0)
                    <div class="space-y-2.5">
                        @foreach($upcomingEvents as $evt)
                            <div class="p-2.5 rounded-lg border border-zinc-100 bg-zinc-50/50 space-y-1">
                                <div class="flex items-center justify-between gap-2">
                                    <span class="font-medium text-xs text-zinc-900 truncate">
                                        {{ $evt->title }}
                                    </span>
                                    <span class="shrink-0 text-[10px] font-semibold text-amber-800 bg-amber-50 border border-amber-200 px-1.5 py-0.5 rounded">
                                        {{ $evt->event_date ? $evt->event_date->format('M d') : 'Upcoming' }}
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 text-[11px] text-zinc-500">
                                    <span class="inline-flex items-center gap-1">
                                        <i class="ri-map-pin-line text-[10px]"></i>
                                        <span>{{ $evt->location ?? 'Online' }}</span>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="py-4 text-center text-xs text-zinc-400 space-y-1.5">
                        <i class="ri-calendar-line text-xl text-zinc-300 block"></i>
                        <p>No upcoming events scheduled.</p>
                        <a href="{{ route('admin.events') }}" class="text-xs font-medium text-amber-700 hover:underline">
                            Create an event →
                        </a>
                    </div>
                @endif
            </div>

            <!-- System Info -->
            <div class="rounded-xl border border-zinc-200 bg-zinc-50/60 p-4 space-y-2 text-xs text-zinc-500">
                <div class="flex items-center justify-between">
                    <span class="font-medium text-zinc-700">NAVUDYAM Portal</span>
                    <span class="inline-flex items-center gap-1 text-emerald-700 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        <span>Live</span>
                    </span>
                </div>
                <p class="text-[11px] text-zinc-400 leading-normal">
                    Admin session authenticated as <span class="font-medium text-zinc-700">{{ auth()->user()?->email }}</span>.
                </p>
            </div>

        </div>

    </div>

</div>
