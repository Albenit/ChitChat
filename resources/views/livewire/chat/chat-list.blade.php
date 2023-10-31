<div>
    <div style="border-bottom: 1px solid #ced4da" class="mb-1">
        <div class="chatlist_header">
            <div class="img_container">
                <svg viewBox="0 0 212 212" height="45" width="45" preserveAspectRatio="xMidYMid meet"
                    class="ln8gz9je ppled2lx" version="1.1" x="0px" y="0px" enable-background="new 0 0 212 212">
                    <path fill="#DFE5E7" class="background"
                        d="M106.251,0.5C164.653,0.5,212,47.846,212,106.25S164.653,212,106.25,212C47.846,212,0.5,164.654,0.5,106.25 S47.846,0.5,106.251,0.5z">
                    </path>
                    <g>
                        <path fill="#FFFFFF" class="primary"
                            d="M173.561,171.615c-0.601-0.915-1.287-1.907-2.065-2.955c-0.777-1.049-1.645-2.155-2.608-3.299 c-0.964-1.144-2.024-2.326-3.184-3.527c-1.741-1.802-3.71-3.646-5.924-5.47c-2.952-2.431-6.339-4.824-10.204-7.026 c-1.877-1.07-3.873-2.092-5.98-3.055c-0.062-0.028-0.118-0.059-0.18-0.087c-9.792-4.44-22.106-7.529-37.416-7.529 s-27.624,3.089-37.416,7.529c-0.338,0.153-0.653,0.318-0.985,0.474c-1.431,0.674-2.806,1.376-4.128,2.101 c-0.716,0.393-1.417,0.792-2.101,1.197c-3.421,2.027-6.475,4.191-9.15,6.395c-2.213,1.823-4.182,3.668-5.924,5.47 c-1.161,1.201-2.22,2.384-3.184,3.527c-0.964,1.144-1.832,2.25-2.609,3.299c-0.778,1.049-1.464,2.04-2.065,2.955 c-0.557,0.848-1.033,1.622-1.447,2.324c-0.033,0.056-0.073,0.119-0.104,0.174c-0.435,0.744-0.79,1.392-1.07,1.926 c-0.559,1.068-0.818,1.678-0.818,1.678v0.398c18.285,17.927,43.322,28.985,70.945,28.985c27.678,0,52.761-11.103,71.055-29.095 v-0.289c0,0-0.619-1.45-1.992-3.778C174.594,173.238,174.117,172.463,173.561,171.615z">
                        </path>
                        <path fill="#FFFFFF" class="primary"
                            d="M106.002,125.5c2.645,0,5.212-0.253,7.68-0.737c1.234-0.242,2.443-0.542,3.624-0.896 c1.772-0.532,3.482-1.188,5.12-1.958c2.184-1.027,4.242-2.258,6.15-3.67c2.863-2.119,5.39-4.646,7.509-7.509 c0.706-0.954,1.367-1.945,1.98-2.971c0.919-1.539,1.729-3.155,2.422-4.84c0.462-1.123,0.872-2.277,1.226-3.458 c0.177-0.591,0.341-1.188,0.49-1.792c0.299-1.208,0.542-2.443,0.725-3.701c0.275-1.887,0.417-3.827,0.417-5.811 c0-1.984-0.142-3.925-0.417-5.811c-0.184-1.258-0.426-2.493-0.725-3.701c-0.15-0.604-0.313-1.202-0.49-1.793 c-0.354-1.181-0.764-2.335-1.226-3.458c-0.693-1.685-1.504-3.301-2.422-4.84c-0.613-1.026-1.274-2.017-1.98-2.971 c-2.119-2.863-4.646-5.39-7.509-7.509c-1.909-1.412-3.966-2.643-6.15-3.67c-1.638-0.77-3.348-1.426-5.12-1.958 c-1.181-0.355-2.39-0.655-3.624-0.896c-2.468-0.484-5.035-0.737-7.68-0.737c-21.162,0-37.345,16.183-37.345,37.345 C68.657,109.317,84.84,125.5,106.002,125.5z">
                        </path>
                    </g>
                </svg>
            </div>
            <div class="title">
                <span x-data="" class="mx-2" style="cursor: pointer"
                    x-on:click.prevent="$dispatch('open-modal', 'start-new-conversation')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" fill="#757373"
                        class="bi bi-person-fill-add" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path
                            d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                    </svg>
                </span>

                <x-modal name="start-new-conversation" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <div class="p-4">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Request to start new conversation') }}
                        </h2>

                        <div class="mt-6 flex justify-start">
                            <x-input-label for="searchNewCoverUser" value="{{ __('Password') }}" class="sr-only" />

                            <x-text-input id="searchNewCoverUser" wire:model="searchNewCoverUser" type="text"
                                class="mt-1 block w-3/4" placeholder="Search..." />
                        </div>
                        <div class="mt-4">
                            @foreach ($searchedUsersForNewConver as $user)
                                <div class="mt-1">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $user->name }}
                                            <span class="badge badge-primary badge-pill">Add</span>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-6 flex justify-center">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                        </div>
                    </div>
                </x-modal>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <span style="cursor: pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#757373"
                                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path
                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </span>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
        <div class="mx-2 my-2">
            <div class="input-group ">
                <input type="text" wire:model='search_users' class="form-control"
                    style="border:1px solid #ced4da; border-radius:5px" placeholder="Search" aria-label="Suche"
                    aria-describedby="basic-addon2">
            </div>
        </div>
    </div>
    <div class="chatlist_body scroll">
        @if (count($conversations) == 0)
            <span class="flex justify-center mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="300" height="150" viewBox="0 0 300 150">
                    <rect width="100%" height="100%" fill="#F0F2F5" />
                    <g transform="translate(40, 40)">
                        <path d="M0,0 h120 v60 l-20,20 h-80 l-20,-20 Z" fill="#fff" />
                        <text x="20" y="30" font-size="14" fill="#333">You don't have any conversation</text>
                        <circle cx="90" cy="45" r="5" fill="#333" />
                        <circle cx="110" cy="45" r="5" fill="#333" />
                        <path d="M95 55 Q100 65 105 55" stroke="#333" fill="transparent" />
                    </g>
                </svg>
            </span>
        @else
            @foreach ($conversations as $item)
                <div class="chatlist_item" wire:key="{{ $item->id }}"
                    wire:click="$emit('chatUserSelected', {{ $item }}, {{ $this->getChatUserInstance($item, 'id') }})">
                    <div class="chatlist_img_container">
                        <svg viewBox="0 0 212 212" height="45" width="45" preserveAspectRatio="xMidYMid meet"
                            class="ln8gz9je ppled2lx" version="1.1" x="0px" y="0px"
                            enable-background="new 0 0 212 212">
                            <path fill="#DFE5E7" class="background"
                                d="M106.251,0.5C164.653,0.5,212,47.846,212,106.25S164.653,212,106.25,212C47.846,212,0.5,164.654,0.5,106.25 S47.846,0.5,106.251,0.5z">
                            </path>
                            <g>
                                <path fill="#FFFFFF" class="primary"
                                    d="M173.561,171.615c-0.601-0.915-1.287-1.907-2.065-2.955c-0.777-1.049-1.645-2.155-2.608-3.299 c-0.964-1.144-2.024-2.326-3.184-3.527c-1.741-1.802-3.71-3.646-5.924-5.47c-2.952-2.431-6.339-4.824-10.204-7.026 c-1.877-1.07-3.873-2.092-5.98-3.055c-0.062-0.028-0.118-0.059-0.18-0.087c-9.792-4.44-22.106-7.529-37.416-7.529 s-27.624,3.089-37.416,7.529c-0.338,0.153-0.653,0.318-0.985,0.474c-1.431,0.674-2.806,1.376-4.128,2.101 c-0.716,0.393-1.417,0.792-2.101,1.197c-3.421,2.027-6.475,4.191-9.15,6.395c-2.213,1.823-4.182,3.668-5.924,5.47 c-1.161,1.201-2.22,2.384-3.184,3.527c-0.964,1.144-1.832,2.25-2.609,3.299c-0.778,1.049-1.464,2.04-2.065,2.955 c-0.557,0.848-1.033,1.622-1.447,2.324c-0.033,0.056-0.073,0.119-0.104,0.174c-0.435,0.744-0.79,1.392-1.07,1.926 c-0.559,1.068-0.818,1.678-0.818,1.678v0.398c18.285,17.927,43.322,28.985,70.945,28.985c27.678,0,52.761-11.103,71.055-29.095 v-0.289c0,0-0.619-1.45-1.992-3.778C174.594,173.238,174.117,172.463,173.561,171.615z">
                                </path>
                                <path fill="#FFFFFF" class="primary"
                                    d="M106.002,125.5c2.645,0,5.212-0.253,7.68-0.737c1.234-0.242,2.443-0.542,3.624-0.896 c1.772-0.532,3.482-1.188,5.12-1.958c2.184-1.027,4.242-2.258,6.15-3.67c2.863-2.119,5.39-4.646,7.509-7.509 c0.706-0.954,1.367-1.945,1.98-2.971c0.919-1.539,1.729-3.155,2.422-4.84c0.462-1.123,0.872-2.277,1.226-3.458 c0.177-0.591,0.341-1.188,0.49-1.792c0.299-1.208,0.542-2.443,0.725-3.701c0.275-1.887,0.417-3.827,0.417-5.811 c0-1.984-0.142-3.925-0.417-5.811c-0.184-1.258-0.426-2.493-0.725-3.701c-0.15-0.604-0.313-1.202-0.49-1.793 c-0.354-1.181-0.764-2.335-1.226-3.458c-0.693-1.685-1.504-3.301-2.422-4.84c-0.613-1.026-1.274-2.017-1.98-2.971 c-2.119-2.863-4.646-5.39-7.509-7.509c-1.909-1.412-3.966-2.643-6.15-3.67c-1.638-0.77-3.348-1.426-5.12-1.958 c-1.181-0.355-2.39-0.655-3.624-0.896c-2.468-0.484-5.035-0.737-7.68-0.737c-21.162,0-37.345,16.183-37.345,37.345 C68.657,109.317,84.84,125.5,106.002,125.5z">
                                </path>
                            </g>
                        </svg>

                    </div>
                    <div class="chatlist_info">
                        <div class="top_row">
                            <div class="list_username">{{ $this->getChatUserInstance($item, $name = 'name') }}</div>
                            <span
                                class="date">{{ $item->messages->last()?->created_at->shortAbsoluteDiffForHumans() }}</span>
                        </div>

                        <div class="bottom_row pb-1">

                            <div class="message_body text-truncate">
                                {{ $item->messages->last()->body ?? 'Sey Hello to ' . $this->getChatUserInstance($item, $name = 'name') }}
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
