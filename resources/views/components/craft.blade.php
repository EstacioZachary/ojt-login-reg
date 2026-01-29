@props(['craft'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <!-- IMPORTANT: min-w-0 added -->
        <div class="flex space-x-3 min-w-0">

            <!-- Avatar -->
            <div class="shrink-0">
                @if($craft->user)
                    <div class="avatar">
                        <div class="size-10 rounded-full">
                            <img src="https://api.dicebear.com/7.x/identicon/svg?seed={{ urlencode($craft->user->email) }}"
                                 alt="{{ $craft->user->name }}'s avatar"
                                 class="rounded-full" />
                        </div>
                    </div>
                @else
                    <div class="avatar placeholder">
                        <div class="size-10 rounded-full">
                            <img src="https://t3.ftcdn.net/jpg/17/53/44/80/360_F_1753448061_wpNHdQE6XGZYOog7m97MDwDWDb9lc5mi.jpg"
                                 alt="Anonymous User"
                                 class="rounded-full" />
                        </div>
                    </div>
                @endif
            </div>

            <!-- Content -->
            <div class="flex-1 min-w-0">
                <!-- Header -->
                <div class="flex justify-between w-full gap-2">
                    <div class="flex items-center gap-1 min-w-0">
                        <span class="text-sm font-semibold truncate">
                            {{ $craft->user ? $craft->user->name : 'Anonymous' }}
                        </span>
                        <span class="text-base-content/60">·</span>
                        <span class="text-sm text-base-content/60 shrink-0">
                            {{ $craft->created_at->diffForHumans() }}
                        </span>

                        @if ($craft->updated_at->gt($craft->created_at->addSeconds(5)))
                            <span class="text-base-content/60">·</span>
                            <span class="text-sm text-base-content/60 italic shrink-0">edited</span>
                        @endif
                    </div>

                    @can('update', $craft)
                        <div class="flex gap-1 shrink-0">
                            <a href="/crafts/{{ $craft->id }}/edit" class="btn btn-ghost btn-xs">
                                Edit
                            </a>
                            <form method="POST" action="/crafts/{{ $craft->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this post?')"
                                        class="btn btn-ghost btn-xs text-error">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endcan
                </div>

                <!-- TEXT (THIS FIXES OVERFLOW) -->
                <div class="mt-1 space-y-1 text-sm"
                 style="margin-top:12px;">

    <h3 class="text-lg font-medium break-words">
        {{ $craft->title }}
    </h3>

    <p class="break-words  mt-1">
        {{ $craft->description }}
    </p>
</div>
            </div>
        </div>
    </div>
</div>
