<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                @includeIf('includes.side_menus.single', [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                    'icon' => 'fas fa-home',
                ])
                <hr>

                @can('View Report')
                    @includeIf('includes.side_menus.section', ['title' => 'Reports'])
                    @can('View Transaction Report')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'transaction-report',
                            'title' => 'Transactions',
                            'icon' => 'fas fa-sort-amount-up',
                        ])
                    @endcan
                    @can('View Treasury Report')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'treasury-report',
                            'title' => 'Treasury',
                            'icon' => 'fas fa-money-check',
                        ])
                    @endcan
                    @can('View Footfall Report')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'footfall-report',
                            'title' => 'Footfall',
                            'icon' => 'fa fa-users',
                        ])
                    @endcan
                    {{-- @can('View Footfall Report') --}}
                    @includeIf('includes.side_menus.single', [
                        'route' => 'user-report',
                        'title' => 'User',
                        'icon' => 'fa fa-users',
                    ])
                    {{-- @endcan --}}
                    {{-- @includeIf('includes.side_menus.single',['route'=>'beach-ticket-report','title'=>'Beach Entry','icon'=>'far fa-ticket']) --}}
                    {{-- @includeIf('includes.side_menus.single',['route'=>'event-booking-report','title'=>'Event Ticket','icon'=>'fa fa-users']) --}}

                    {{-- @includeIf('includes.side_menus.single',['route'=>'furniture-booking-report','title'=>'Furniture','icon'=>'fa fa-users']) --}}

                @endcan


                @can('View Beach Booking')
                    @includeIf('includes.side_menus.section', ['title' => 'Beach Bookings'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'beach-coupon',
                        'title' => 'Coupon',
                        'icon' => 'fas fa-cubes',
                    ])
                    <hr>
                @endcan

                @can('View Event Booking')
                    @includeIf('includes.side_menus.section', ['title' => 'Event Bookings'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'all-events',
                        'title' => 'Show Event',
                        'icon' => 'fas fa-cubes',
                    ])
                @endcan

                <hr>
                @can('View Vendor')
                    @includeIf('includes.side_menus.section', ['title' => 'Vendor Mgt'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'vendors',
                        'title' => 'All Vendors',
                        'icon' => 'fas fa-cubes',
                    ])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'store-vendors',
                        'title' => 'F&B Stores',
                        'icon' => 'fas fa-list-alt',
                    ])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'vendor-users',
                        'title' => 'Vendor Users',
                        'icon' => 'fa fa-users',
                    ])
                @endcan

                <hr>
                @includeIf('includes.side_menus.section', ['title' => 'Upside Down House'])
                @includeIf('includes.side_menus.single', [
                    'route' => 'udh-dashboard',
                    'title' => 'Dashboard',
                    'icon' => 'fas fa-cubes',
                ])
                <hr>
                @includeIf('includes.side_menus.section', ['title' => 'Membership'])
                @includeIf('includes.side_menus.single', [
                    'route' => 'membership',
                    'title' => 'Dashboard',
                    'icon' => 'fas fa-cubes',
                ])
                <hr>
                @can('View FandB')


                    @includeIf('includes.side_menus.section', ['title' => 'F and B Mgt'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'fandb-dashboard',
                        'title' => 'Dashboard',
                        'icon' => 'fas fa-cubes',
                    ])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'vendor-sales',
                        'title' => 'Vendor Sales',
                        'icon' => 'fas fa-cubes',
                    ])
                    @can('View FandB Escrow')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'escrow-transactions',
                            'title' => 'Escrow Transactions',
                            'icon' => 'fas fa-cubes',
                        ])

                        @includeIf('includes.side_menus.single', [
                            'route' => 'offline-orders',
                            'title' => 'Offline Order',
                            'icon' => 'fas fa-cubes',
                        ])
                    @endcan

                    @includeIf('includes.side_menus.single', [
                        'route' => 'products',
                        'title' => 'Products',
                        'icon' => 'fas fa-cubes',
                    ])

                @endcan

                <hr>


                @can('View Withdraw Request')
                    @includeIf('includes.side_menus.section', ['title' => 'Transactions'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'payment-transactions',
                        'title' => 'Transaction Payment',
                        'icon' => 'fas fa-receipt',
                    ])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'withdrawal-requests',
                        'title' => 'Withdrawal Requests',
                        'icon' => 'fa fa-list',
                    ])
                @endcan
                <hr>
                @can('View Wallet List')
                    @includeIf('includes.side_menus.section', ['title' => 'Wallets'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'wallet-list',
                        'title' => 'Wallet List',
                        'icon' => 'fas fa-digital-tachograph',
                    ])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'wallet-transactions',
                        'title' => 'Wallet Transactions Logs',
                        'icon' => 'fas fa-stream',
                    ])
                @endcan
                <hr>
                @can('User mgt')
                    @includeIf('includes.side_menus.section', ['title' => 'Users'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'customer-mgt',
                        'title' => 'Users',
                        'icon' => 'fa fa-users',
                    ])
                    {{-- @can('View Activity Logs') --}}
                    @includeIf('includes.side_menus.single', [
                        'route' => 'subscription-form',
                        'title' => 'Send Newsletter',
                        'icon' => 'fas fa-box',
                    ])
                    {{-- @endcan --}}
                @endcan
                <hr>
                @can('Event mgt')
                    @includeIf('includes.side_menus.section', ['title' => 'Event Bookings'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'all-events',
                        'title' => 'Show Event',
                        'icon' => 'fas fa-cubes',
                    ])
                @endcan




                <hr>
                {{-- @includeIf('includes.side_menus.single',['route'=>'menu-ordering-report','title'=>'Menu Ordering','icon'=>'fa fa-users']) --}}

                @can('View Settings')
                    @includeIf('includes.side_menus.section', ['title' => 'Settings'])
                    @can('Update Admin Role')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'roles',
                            'title' => 'Roles',
                            'icon' => 'fas fa-user-friends',
                        ])
                    @endcan
                    @can('Update Permission')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'permissions',
                            'title' => 'Permissions',
                            'icon' => 'fas fa-check-square',
                        ])
                    @endcan
                    @can('View Activity Logs')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'activity-logs',
                            'title' => 'Activity Logs',
                            'icon' => 'fas fa-layer-group',
                        ])
                    @endcan
                    @can('View Admin User')
                        @includeIf('includes.side_menus.single', [
                            'route' => 'admin-users',
                            'title' => 'Admin Users',
                            'icon' => 'fas fa-user-cog',
                        ])
                    @endcan
                @endcan

                @if (env('APP_ENV') == 'local')
                    @includeIf('includes.side_menus.section', ['title' => 'Beach Bookings'])
                    @includeIf('includes.side_menus.single', [
                        'route' => 'beach-coupon',
                        'title' => 'Coupon',
                        'icon' => 'fas fa-cubes',
                    ])
                    <hr>
                @endif

            </ul>
        </div>
    </div>
</div>
