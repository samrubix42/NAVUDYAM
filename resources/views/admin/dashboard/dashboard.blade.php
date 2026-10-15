<div class="space-y-6">

    <!-- Page Header (shadcn style) -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-2 border-b border-slate-200/80">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 font-heading">
                Dashboard
            </h1>
            <p class="text-xs text-slate-500 mt-0.5">
                Overview of Navudyam Foundation programs, applications, and impact metrics.
            </p>
        </div>
        <div class="flex items-center gap-2.5">
            <button type="button" 
                    class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 shadow-2xs transition-colors">
                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                <span>Export Report</span>
            </button>
            <button type="button" 
                    class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-white bg-slate-900 border border-slate-900 rounded-lg hover:bg-slate-800 shadow-2xs transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <span>New Initiative</span>
            </button>
        </div>
    </div>

    <!-- 4 Stats Cards (shadcn minimal cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Stat Card 1 -->
        <div class="bg-white border border-slate-200/80 rounded-xl p-5 shadow-2xs hover:border-slate-300 transition-colors">
            <div class="flex items-center justify-between text-slate-500 mb-2">
                <span class="text-xs font-medium">Total Inquiries</span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>
            </div>
            <div class="text-2xl font-bold tracking-tight text-slate-900 font-heading">
                148
            </div>
            <p class="text-[11px] text-emerald-600 font-medium mt-1.5 flex items-center gap-1">
                <span>↑ 12.5%</span>
                <span class="text-slate-400 font-normal">from last month</span>
            </p>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white border border-slate-200/80 rounded-xl p-5 shadow-2xs hover:border-slate-300 transition-colors">
            <div class="flex items-center justify-between text-slate-500 mb-2">
                <span class="text-xs font-medium">Active Programs</span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
            </div>
            <div class="text-2xl font-bold tracking-tight text-slate-900 font-heading">
                4 Hubs
            </div>
            <p class="text-[11px] text-slate-500 mt-1.5">
                Wardha, Pune, Nagpur, Amravati
            </p>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white border border-slate-200/80 rounded-xl p-5 shadow-2xs hover:border-slate-300 transition-colors">
            <div class="flex items-center justify-between text-slate-500 mb-2">
                <span class="text-xs font-medium">Mentors Network</span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <div class="text-2xl font-bold tracking-tight text-slate-900 font-heading">
                1,240
            </div>
            <p class="text-[11px] text-emerald-600 font-medium mt-1.5 flex items-center gap-1">
                <span>+28</span>
                <span class="text-slate-400 font-normal">registered this month</span>
            </p>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white border border-slate-200/80 rounded-xl p-5 shadow-2xs hover:border-slate-300 transition-colors">
            <div class="flex items-center justify-between text-slate-500 mb-2">
                <span class="text-xs font-medium">Upcoming Sessions</span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <div class="text-2xl font-bold tracking-tight text-slate-900 font-heading">
                3 Events
            </div>
            <p class="text-[11px] text-amber-600 font-medium mt-1.5 flex items-center gap-1">
                <span>Next: Nov 15</span>
                <span class="text-slate-400 font-normal">• Cohort AMA</span>
            </p>
        </div>

    </div>

    <!-- Main Two-Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left Column: Recent Applications & Inquiries Table (Col 8) -->
        <div class="lg:col-span-8 bg-white border border-slate-200/80 rounded-xl shadow-2xs overflow-hidden">
            
            <div class="p-4 sm:p-5 border-b border-slate-200/80 flex items-center justify-between">
                <div>
                    <h2 class="text-sm font-semibold text-slate-900 font-heading">
                        Recent Inquiries & Applications
                    </h2>
                    <p class="text-xs text-slate-500">
                        Review submissions from alumni, students, and institutional partners.
                    </p>
                </div>
                <a href="#view-all" class="text-xs font-medium text-slate-600 hover:text-slate-900 transition-colors">
                    View all →
                </a>
            </div>

            <!-- Table (shadcn minimal) -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-slate-600">
                    <thead class="bg-slate-50/70 text-slate-500 text-[11px] uppercase tracking-wider font-semibold border-b border-slate-200/60">
                        <tr>
                            <th class="px-5 py-3">Applicant</th>
                            <th class="px-4 py-3">Program / Interest</th>
                            <th class="px-4 py-3">Location</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="px-5 py-3.5">
                                <div class="font-medium text-slate-900">Rajesh Sharma</div>
                                <div class="text-[11px] text-slate-400">rajesh.s@gmail.com</div>
                            </td>
                            <td class="px-4 py-3.5 text-slate-700">
                                Commercial Laundry Hub
                            </td>
                            <td class="px-4 py-3.5">
                                Wardha, MH
                            </td>
                            <td class="px-4 py-3.5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-200/60">
                                    New
                                </span>
                            </td>
                            <td class="px-4 py-3.5 text-slate-400 text-[11px]">
                                Today, 2:40 PM
                            </td>
                            <td class="px-4 py-3.5 text-right">
                                <button type="button" class="text-slate-600 hover:text-slate-900 font-medium">Review</button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="px-5 py-3.5">
                                <div class="font-medium text-slate-900">Pooja Deshmukh</div>
                                <div class="text-[11px] text-slate-400">pooja.d@navodaya.net</div>
                            </td>
                            <td class="px-4 py-3.5 text-slate-700">
                                Student Mentorship
                            </td>
                            <td class="px-4 py-3.5">
                                Nagpur, MH
                            </td>
                            <td class="px-4 py-3.5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-200/60">
                                    In Review
                                </span>
                            </td>
                            <td class="px-4 py-3.5 text-slate-400 text-[11px]">
                                Yesterday
                            </td>
                            <td class="px-4 py-3.5 text-right">
                                <button type="button" class="text-slate-600 hover:text-slate-900 font-medium">Review</button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="px-5 py-3.5">
                                <div class="font-medium text-slate-900">Amit Kumar Verma</div>
                                <div class="text-[11px] text-slate-400">amit.verma@techcorp.in</div>
                            </td>
                            <td class="px-4 py-3.5 text-slate-700">
                                Alumni Angel Donor
                            </td>
                            <td class="px-4 py-3.5">
                                Pune, MH
                            </td>
                            <td class="px-4 py-3.5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-200/60">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3.5 text-slate-400 text-[11px]">
                                Oct 12, 2026
                            </td>
                            <td class="px-4 py-3.5 text-right">
                                <button type="button" class="text-slate-600 hover:text-slate-900 font-medium">Details</button>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="px-5 py-3.5">
                                <div class="font-medium text-slate-900">Dr. Sunita Patel</div>
                                <div class="text-[11px] text-slate-400">sunita.patel@jnv.edu</div>
                            </td>
                            <td class="px-4 py-3.5 text-slate-700">
                                JNV School Guidance Visit
                            </td>
                            <td class="px-4 py-3.5">
                                Amravati, MH
                            </td>
                            <td class="px-4 py-3.5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-200/60">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3.5 text-slate-400 text-[11px]">
                                Oct 10, 2026
                            </td>
                            <td class="px-4 py-3.5 text-right">
                                <button type="button" class="text-slate-600 hover:text-slate-900 font-medium">Details</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <!-- Right Column: Quick Status & Program Highlights (Col 4) -->
        <div class="lg:col-span-4 space-y-4">
            
            <!-- Foundation Status Card -->
            <div class="bg-white border border-slate-200/80 rounded-xl p-5 shadow-2xs space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-900 font-heading">
                        Foundation Credentials
                    </span>
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-200/70">
                        Active Section 8
                    </span>
                </div>
                <p class="text-xs text-slate-500 leading-relaxed">
                    NAVUDYAM is registered under the Indian Companies Act with active 80G tax exemptions and 12A certification.
                </p>
                <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-400">
                    <span>Audit Year: 2025–26</span>
                    <span class="text-emerald-600 font-medium">Compliant ✓</span>
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="bg-white border border-slate-200/80 rounded-xl p-5 shadow-2xs space-y-3">
                <h3 class="text-xs font-semibold text-slate-900 uppercase tracking-wider font-heading">
                    Quick Actions
                </h3>
                <div class="space-y-1.5">
                    <button type="button" 
                            class="w-full px-3 py-2 text-xs font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-between transition-colors">
                        <span>Publish New Blog Story</span>
                        <span class="text-slate-400">→</span>
                    </button>
                    <button type="button" 
                            class="w-full px-3 py-2 text-xs font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-between transition-colors">
                        <span>Schedule Cohort Session</span>
                        <span class="text-slate-400">→</span>
                    </button>
                    <button type="button" 
                            class="w-full px-3 py-2 text-xs font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-between transition-colors">
                        <span>Review Mentor Applications</span>
                        <span class="text-slate-400">→</span>
                    </button>
                </div>
            </div>

        </div>

    </div>

</div>