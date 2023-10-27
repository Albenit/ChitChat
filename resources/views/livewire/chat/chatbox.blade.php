<div>
    @if ($selectedcoversations)
        <div class="chatbox_header">
            <div class="return d-md-none ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </div>

            <div class="img_container ps-4">
                <svg viewBox="0 0 212 212" height="40" width="40" class="ln8gz9je ppled2lx"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"/><path class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z" fill="#FFF"/></svg>

            </div>

            <div class="name">
                {{ $receiverInstance->name }}
            </div>

            <div class="info">
                <div class="info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                </div>
                <div class="info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        <path
                            d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                    </svg>
                </div>
                <div class="info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="chatbox_body scroll">
            @foreach ($messages as $message)
                <div class="msg_body  {{ Auth::user()->id == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver' }}" style="width: 80%;max-width:80%;max-width:max-content">
                    {{ $message->body }}
                    <div class="msg_body_footer">
                        <div class="date">
                            {{ $message->created_at->format('m: i a') }}
                        </div>
                        <div class="read">
                            @if ($message->user->id === Auth::user()->id)

                                @if ($message->read == 0)
                                        <i class="bi bi-check2 status_tick"></i>
                                    @else
                                        <i class="bi bi-check2-all text-primary status_tick"></i>
                                @endif

                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            $('.chatbox_body').on('scroll', function() {
                var top = $('.chatbox_body').scrollTop();
                clearTimeout(debounceTimer);

                debounceTimer = setTimeout(function() {
                    if (top == 0) {
                        window.livewire.emit('loadmore');
                    }
                }, 800);
            });

            window.addEventListener('updatedHeight', event => {
                let oldHeight = event.detail.height;

                let newHeight = $('.chatbox_body')[0].scrollHeight

                let height = $('.chatbox_body').scrollTop(newHeight - oldHeight);
            });
        </script>

    @else
        <div class="fs-4 image-fluid" style="display: flex;height: 100vh;justify-content: center;align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1080 1080" viewBox="0 0 1080 1080" id="business-interview"><path fill="#2a94f4" d="M256.73 694.27s-31.78-67.47 21.11-109.19c52.89-41.73-44.11-84.09-9.11-135.91s154-9.82 151-105.82 97-122 130-93S587.27 420.7 682 405.53C776.73 390.35 865.73 590.65 789.73 694l-533 .27z" opacity=".06"></path><path fill="#f7f7f7" d="M815.4 704.12c0 7.55-6.12 13.68-13.68 13.68H245.41c-7.55 0-13.68-6.12-13.68-13.68 0-7.55 6.12-13.68 13.68-13.68h556.32c7.55.01 13.67 6.13 13.67 13.68z"></path><path fill="#d3d3d3" d="m381.74 612-18.17-66.62h48.46v59.47h34.14v9.91h-1.65l1.92 76.26h-3.85v-77.09h-53.41l-6.61 77.09h-3.3z"></path><path fill="#fab9af" d="M482.63 590.18c-1.42-1.01-2.73-2.18-3.33-2.52-.25-.14-1.04-.32-1.26-.39-.66-.2-1.71-.4-2.17-.92l-1.95-2.14c-.93-1.05-2.14-1.4-3.19-.47-1.14 1-.8 2.43.33 3.44l1.34 1.52c.9.81 1.35 1.95 1.85 3.06 1.02 2.25 3.31 3.94 5.28 5.13 1.24.74 3.11.22 5.56-.62 1.2-.41 2.95-1.41 1.45-1.97-1.26-.47-5.05.55-6.73-2.94-.08-.17-.26-.63-.09-.79.51-.48 1.63.6 2.38.94 1.05.48 1.89.32 2.16-.07.27-.4-.62-.54-1.63-1.26z"></path><path fill="#ffbe55" d="M429.26 513.52s3.13 37.6 14.37 50.29c6.78 7.65 23.34 20.76 27.18 23.77.49.38 1.17.4 1.68.04.32-.23.69-.51 1.01-.79.32-.28.7-.7 1.03-1.09.56-.65.53-1.62-.05-2.25-4.3-4.68-21.17-23.2-23.22-28.07-2.35-5.59-6.4-38.56-10.12-43.34-3.72-4.78-10.86-5.82-11.88 1.44z"></path><path fill="#fab9af" d="m443.45 575.64-9.58-67.35-25.86-3.54-13.45 70.4z"></path><path fill="#d3d3d3" d="m444.44 573.92-10.57-65.63-25.86-3.55-13.9 69.3c-.26 1.3.58 2.57 1.89 2.81 4.81.91 16.43 2.82 29.42 2.82 9.7 0 15.15-1.89 17.63-3.08a2.49 2.49 0 0 0 1.39-2.67z"></path><path fill="#ffbe55" d="M416.09 508.83c0 4.73-.86 9.41-2.47 13.85-3.16 8.69-7.9 25.13-5.08 39.61 4.05 20.85 9.27 29.28 2.51 34.14-6.76 4.86-19.72-3.25-20.09-5.95-.37-2.7 2.52-35.91 5.8-50.3s12.48-35.07 12.48-35.07l3.9.42a3.33 3.33 0 0 1 2.95 3.3zM426.86 507.33s4.48 9.69 2.92 23.62c-1.56 13.92-5.19 56.33 7.48 62.73 4.01 2.03 13.18-6.95 13.18-10.28s-3.06-14.48-5.96-24.62-9.88-50.38-9.88-50.38l-7.74-1.07z"></path><path fill="#fab9af" d="M423.25 477.29c-5.77 0-7.92 4.11-8.03 11.71-.04 2.85 1.24 5.67 2.27 7.47.77 1.34.98 2.92.54 4.4l-1.27 4.29c-.86 3.98 1.03 6.16 3.82 6.95 1.38.39 3.04.09 4.24-.69 1.43-.93 1.55-2.92 1.29-4.61l-.33-1.22c-.44-1.65.51-3.42 2.18-3.79 4.44-.97 5.08-5.6 6.27-12.8 1.23-7.5-5.21-11.71-10.98-11.71z"></path><path fill="#0b4870" d="m436.68 473.96-3.31 1.01a6.49 6.49 0 0 1-3.73.02l-6.61-1.92c-4 0-10.61 2.26-9.78 8.04l.74 4.08c.29 1.63 1.66 2.85 3.31 2.99.15.56.67.96 1.25.96.72 0 1.3-.58 1.3-1.29 0-1.84 1.29-3.41 3.09-3.82 2.2-.49 4.56-.61 7.02.05 4.59 1.23 9.43-1.61 9.89-6.35.03-.3.04-.6.04-.91.01-1.91-1.57-3.31-3.21-2.86z"></path><path fill="#fab9af" d="M418.39 489.14c0 1.76-.66 3.19-2.35 3.19-1.7 0-2.79-2.42-2.79-4.18 0-1.76 1.09-2.2 2.79-2.2s2.35 1.43 2.35 3.19z"></path><path fill="#e8948b" d="M417.69 496.88s4.31 5.93 9.67 5.12c0 0-1.11.53-1.38 1.4 0 0-5.09-.38-8.29-6.52z"></path><path fill="#fab9af" d="m365.65 632.53-6.25 8.73a23.42 23.42 0 0 0-3.02 5.78l-1.15 3.24c-.95 2.66-4.17 3.67-6.47 2.03-5.95-4.25-16.15-11.47-18.78-13.33-.43-.3-.65-.89-.38-1.35 1.59-2.71 8.16 3.23 15.25 5.03 5.4 1.37 12.61-8.83 15.24-13.64 1-1.82 3.41-2.26 5-.92a3.28 3.28 0 0 1 .56 4.43z"></path><path fill="#0b4870" d="M449.19 586.85c-1.23-.62-19.69-22.16-31.39-24-11.69-1.85-12.92 5.54-27.69 22.77-14.77 17.23-36.93 51.7-36.93 51.7l6.77 4.92s31.39-38.16 41.23-47.39c9.85-9.23 13.85-11.39 16.92-2.77 3.08 8.62 10.46 23.39 25.23 14.77 14.78-8.61 5.86-20 5.86-20z"></path><path fill="#fab9af" d="m421.54 664.94 3.7 12.28c.16.54.41 1.06.72 1.53l2.62 3.89c1.66 2.47.47 5.85-2.38 6.72 0 0-5.29 1.86-10.74 3.65-5.58 1.83-12.6.3-12.6-1.17 0-3.27 3.05-.67 8.16-4.09 1.71-1.14 3.48-2.34 5.05-3.58 4.4-3.45.56-12.19-2.13-17.11-.97-1.77.06-3.97 2.03-4.39l1.27-.27c1.89-.39 3.75.71 4.3 2.54z"></path><path fill="#0b4870" d="M411.65 581.31s-18.46-1.23-14.15 19.08 17.23 72 17.23 72h11.69l-3.08-72.62c0 .01-9.23-18.46-11.69-18.46zM425.4 677.67s-4.62 2.36-7.34 2.4c0 0 .84 4.09-5.62 6.74-6.46 2.66-9.77 1-9.77 4.86 0 3.85 8.26 5.51 13.77 3.85 5.51-1.65 12.66-6.61 14.32-7.71 1.64-1.1-5.36-10.14-5.36-10.14zM357.05 644.85s-5.08-2.5-6.88-4.86c0 0-3.03 3.4-9.56-.52s-7.24-7.89-10.61-5.38.57 10.81 5.6 14.55 14.03 6.77 16.07 7.5c2.04.73 5.38-11.29 5.38-11.29z"></path><path fill="#ffbe55" d="M409 505s-9 25-8 41 .99 29.05-8.01 19.02S390 504 409 505"></path><path fill="#fab9af" d="M444.78 532.41c-1.43 1.76-3.05 3.37-3.54 4.13-.21.32-.5 1.33-.6 1.61-.31.84-.65 2.2-1.36 2.75l-2.94 2.37c-1.44 1.12-1.99 2.66-.87 4.1 1.21 1.56 3.09 1.23 4.5-.15l2.08-1.62c1.13-1.11 2.65-1.6 4.12-2.16 3.01-1.14 5.39-3.99 7.1-6.46 1.07-1.55.53-4.02-.36-7.28-.44-1.6-1.6-3.95-2.45-2.04-.71 1.6.32 6.61-4.37 8.51-.23.09-.84.29-1.03.06-.58-.7.91-2.07 1.42-3.02.71-1.33.56-2.44.08-2.81-.5-.4-.76.76-1.78 2.01z"></path><path fill="#ffbe55" d="M389.96 558.09s2.21 18.87 12.62 11.89C413 563 432 554 437 550l5-4-3.09-6.53-48.95 18.62z"></path><path fill="#d3d3d3" d="m697.27 611 18.17-66.62h-48.45v59.47h-34.14v9.91h1.65l-1.93 76.26h3.86v-77.09h53.41l6.61 77.09h3.3z"></path><ellipse cx="651.37" cy="517.02" fill="#0b4870" rx="11.77" ry="15.18"></ellipse><path fill="#0b4870" d="M654.19 518.59c.19-8.4 6.99-15.47 15.38-15.95 7.44-.43 13.87 4.14 16.28 10.65.84 2.28 3.08 3.77 5.51 3.73 1.01-.02 2.05.08 3.11.29 6.15 1.26 10.93 6.46 11.57 12.7.58 5.63-2.05 10.69-6.29 13.57-1.81 1.23-2.83 3.27-3.13 5.43-1.39 10.02-10.53 17.37-20.97 16.23-8.92-.98-16.06-8.32-16.82-17.26-.47-5.49 1.42-10.52 4.73-14.26-5.63-2.66-9.52-8.44-9.37-15.13zM651.37 496.86s-6.62 4.17-5.82 9.78c0 0-3.54-2.5-4.34-11.13-.55-5.98 10.16 1.35 10.16 1.35z"></path><path fill="#fab9af" d="M647.29 531.07c-.16 4.87-.48 9.77-1.17 14.7-.72 4.91-1.73 9.88-3.6 14.69-.93 2.4-2.08 4.75-3.52 6.96-1.43 2.21-3.2 4.25-5.28 5.91-2.07 1.67-4.4 2.98-6.84 3.84-2.45.86-4.97 1.29-7.46 1.46-.72.05-1.34-.5-1.39-1.21-.04-.66.41-1.23 1.03-1.36h.01c4.51-.95 8.61-3.02 11.52-6.14 2.94-3.1 4.74-7.15 5.84-11.43 1.1-4.3 1.59-8.84 1.78-13.44.11-2.3.14-4.62.12-6.95-.01-2.33-.05-4.67-.13-7.01a4.548 4.548 0 0 1 9.09-.33v.31z"></path><path fill="#2a94f4" d="M643.96 560.16c-2.65-7.98-7.98-24.89-7.52-30.42a6.81 6.81 0 0 1 6.8-6.25h23.05c3.82 0 6.95 3.03 7.06 6.85.19 6.68-2.88 21.87-4.61 29.82h-24.78z"></path><path fill="#2a94f4" d="M671.37 570.28a21.966 21.966 0 0 1-1.05-10.45c1.16-8.17 3.2-23.56 3.01-30.09a6.447 6.447 0 0 0-6.45-6.26h-3.42c-1.3 3.02-4.06 5.35-8.35 5.35-4.28 0-7.04-2.33-8.34-5.35h-3.21c3.49 7.47 2.23 17.32-3.77 23.07 1.12 3.94 2.05 7.91 2.75 11.12.95 4.35.53 8.89-1.18 13.01-2.95 7.07-5.28 18.41-4.59 22.9 24.25 6.87 41.01-5.29 41.01-5.29l-6.41-18.01z"></path><path fill="#fab9af" d="m651.37 525.08 10.46-1.1-3.31-11.44-6.76.83z"></path><path fill="#fa968c" d="m651.76 513.37 6.76-.84 1.03 3.57c-1.51 1.71-3.46 5.39-5.92 5.39-.78 0-1.49-.22-2.13-.63l.26-7.49z"></path><path fill="#fab9af" d="M651.52 518.91c2.3 0 4.78-1.15 8.2-4.14 1.96-1.72 3.42-4.71 3.42-6.73v-11.18h-17.21s-1.29 5.94-.04 11.83c.94 4.41 3.83 10.22 5.63 10.22z"></path><path fill="#fab9af" d="M660.22 505.92c0 2.18 1.04 3.95 2.33 3.95s2.71-2.86 2.71-5.04-1.42-2.86-2.71-2.86c-1.28 0-2.33 1.77-2.33 3.95z"></path><path fill="#0b4870" d="M665.26 498.21a6.32 6.32 0 0 0-6.32-6.32h-5.81c-1.66 0-3.27-.43-4.69-1.24-2.05-1.16-4.64-.78-6.04 1.12-1.51 2.05-2.17 4.8 1.67 7.34 1.91 1.26 4.69-.14 6.55.47.11 0 .22-.02.34-.02h5.12c1.78 0 3.14 1.45 3.19 3.23.03 1.13.95 2.03 2.09 2.03h.23l.82-2.63 2.86 3.85v-7.83z"></path><path fill="#fab9af" d="M614.64 573.43s6.02.7 6.42 2.61c.39 1.91.31 3.26-2.45 3.94-2.76.68-6.86.29-9.28-.43-2.42-.72-5.95-3.64-6.13-4.21-.63-2.05 3.61-.28 5.71.48 2.09.76 4.54 1.4 4.61.29.08-1.11-4.04-2.26-4.37-3.56-.33-1.3 5.49.88 5.49.88zM632.56 576.09s5.98-.98 6.89.75c.9 1.73 1.19 3.05-1.27 4.46-2.47 1.41-6.52 2.17-9.04 2.14-2.52-.03-6.73-1.87-7.05-2.36-1.17-1.8 3.4-1.26 5.62-1.11 2.22.15 4.75.1 4.52-.99s-4.51-1.06-5.18-2.22c-.68-1.16 5.51-.67 5.51-.67z"></path><path fill="#0b4870" d="M647.21 496.66c.58 2.55-.27 3.95 8.1 7.94s11.02 2.28 13.64 6.58c0 0-1.14-7.11-5.77-9.55-4.62-2.44-12.64-4.04-15.22-9.69 0 0-1.14 2.97-.75 4.72z"></path><path fill="#fab9af" d="M672.45 528.25c1.28 1.69 2.3 3.24 3.35 4.91 1.03 1.65 2.02 3.32 2.94 5.04 1.82 3.45 3.45 7.04 4.71 10.85 1.23 3.81 2.1 7.87 2.07 12.2-.03 2.16-.32 4.39-1 6.57-.65 2.18-1.78 4.28-3.24 6.05-1.45 1.78-3.21 3.24-5.06 4.36-1.86 1.13-3.8 1.95-5.75 2.58-1.95.63-3.91 1.02-5.86 1.35-1.95.26-3.89.46-5.82.51-7.71.29-15.2-.67-22.54-2.05-.71-.13-1.17-.81-1.04-1.52.12-.65.7-1.09 1.34-1.06h.02c3.68.18 7.34.32 10.99.25 3.64-.05 7.26-.24 10.78-.74 3.52-.5 6.95-1.28 10.03-2.53 3.06-1.27 5.7-3.09 7.26-5.43 1.59-2.31 2.18-5.16 2.04-8.24-.16-3.09-1.05-6.33-2.25-9.49-1.19-3.18-2.75-6.31-4.5-9.34a89.96 89.96 0 0 0-2.74-4.5c-.48-.74-.97-1.46-1.47-2.18-.48-.7-1.02-1.47-1.47-2.06l-.04-.06c-1.51-2-1.11-4.85.89-6.36 2-1.51 4.85-1.11 6.36.89z"></path><path fill="#0b4870" d="M648.82 497.14s-.32 8.6-7.84 12.74c0 0 3.31-6.5 3.09-10.76-.22-4.25 5.25-4.92 4.75-1.98z"></path><path fill="#fa968c" d="m618.11 663.42-2.7 11.98c-.82 3.66-.31 7.51 1.46 10.82.99 1.85.11 4.15-1.87 4.85-6.4 2.28-18.8 6.62-19.35 6.15-2.82-2.39 4.63-6.33 10.14-10.47 3.71-2.79 5.13-15.8 5.46-25.78l5.91 1.49c.46.14.82.5.95.96z"></path><path fill="#0b4870" d="m653.58 587.19 24.63 1.09s6.57 20.25-5.47 21.89c-12.04 1.64-47.07-2.19-48.17 3.28-1.09 5.47-6.57 53.64-6.57 53.64h-8.21s.55-30.65 0-46.53-2.74-22.44 3.83-25.18c6.57-2.71 39.96-8.19 39.96-8.19z"></path><path fill="#fa968c" d="M625.15 634.83s1.41 12 1.8 14.02c.32 1.67 1.48 2.99 2.57 4.29.35.42.61 1.24.83 1.94.18.56.03 1.15-.3 1.63-5.94 8.38-17.38 9.3-17.43 8.53-.1-1.38 2.13-3.5 4.66-4.17 2.55-.68 4.48-2.77 5.26-5.29.62-2 .72-4.13.29-6.18l-2.06-9.21 4.38-5.56z"></path><path fill="#0b4870" d="M631.79 660.03c.58-.39.79-1.14.5-1.77-.24-.52-.87-1.93-1.35-2.99a.678.678 0 0 0-1.14-.15c-3.72 4.33-8.74 7.13-14.11 6.44-1.99.68-3.75 2.95-3.67 4.04.02.26 2.31.91 5.1.18 12.38-3.23 14.67-5.75 14.67-5.75zM639.32 590.19l-16.42 3.83 3.83 50.91-6.02 1.09s-14.78-35.58-14.23-52c.55-16.42 13.68-11.49 21.35-9.31 7.66 2.2 11.49 5.48 11.49 5.48zM607.05 690.17c-2.65.87-5.55 1.15-8.21 1.48-.3.04-.6.16-.84.34-2.55 1.98-3.84 3.97-2.34 5.23.6.51 15.17-4.65 20.85-6.69 1.19-.43 1.71-1.8 1.11-2.92l-1.08-2.03c-2.97 1.9-6.14 3.48-9.49 4.59zM465.1 571.02H600v4.96H465.1z"></path><path fill="#76838b" d="M471.71 575.98h2.75v115.08h-2.75zM590.09 575.98h2.75v115.08h-2.75z"></path><path fill="#ffbe55" d="M758.57 691.15c0 1.97-1.6 3.56-3.56 3.56h-13.75c-1.97 0-3.56-1.6-3.56-3.56v-32.07c0-1.97 1.6-3.56 3.56-3.56h13.75c1.97 0 3.56 1.6 3.56 3.56v32.07z"></path><path fill="#2a94f4" d="M749.78 618.6s-11.25 22.87 5.33 26.77c16.58 3.9 17.06-13.36 15.36-20.47-1.7-7.11 24.61-26.23 2.91-43.14s-38.61 28.11-23.6 36.84z" opacity=".4"></path><path fill="#2a94f4" d="M728.83 631.01s-.53 15.05 9.35 13.14c9.88-1.91 5.96-11.33 3.32-14.75s6.92-20.09-8.87-23.96c-15.78-3.86-14 24.51-3.8 25.57z" opacity=".4"></path><path fill="none" stroke="#4d4d4d" stroke-miterlimit="10" d="m730.51 616.83 12.22 38.69M737.64 624.7l-2.59 6.5-5.89-3.25M763.03 594.94l-10.48 60.58M769.18 604.1l-8.68 5.48-5.57-7.52M766.81 616.8l-8.69 5.49-5.57-7.52"></path><path fill="#ffbe55" d="M300.57 691.15c0 1.97-1.6 3.56-3.56 3.56h-13.75c-1.97 0-3.56-1.6-3.56-3.56v-32.07c0-1.97 1.6-3.56 3.56-3.56h13.75c1.97 0 3.56 1.6 3.56 3.56v32.07z"></path><path fill="#2a94f4" d="M291.78 618.6s-11.25 22.87 5.33 26.77c16.58 3.9 17.06-13.36 15.36-20.47-1.7-7.11 24.61-26.23 2.91-43.14s-38.61 28.11-23.6 36.84z" opacity=".4"></path><path fill="#2a94f4" d="M270.83 631.01s-.53 15.05 9.35 13.14c9.88-1.91 5.96-11.33 3.32-14.75s6.92-20.09-8.87-23.96-14 24.51-3.8 25.57z" opacity=".4"></path><path fill="none" stroke="#4d4d4d" stroke-miterlimit="10" d="m272.51 616.83 12.22 38.69M279.64 624.7l-2.59 6.5-5.89-3.25M305.03 594.94l-10.48 60.58M311.18 604.1l-8.68 5.48-5.57-7.52M308.81 616.8l-8.69 5.49-5.57-7.52"></path><path fill="#ffbe55" d="M509.01 414.19h-86.9c-2.29 0-4.15 1.86-4.15 4.15v30.51c0 2.29 1.86 4.15 4.15 4.15h5.98v13.55l16.6-13.55h64.32c2.29 0 4.15-1.86 4.15-4.15v-30.51a4.153 4.153 0 0 0-4.15-4.15zm-84.77 18.18h51.75v1.75h-51.75v-1.75zm78.75 8h-78.75v-1.75h78.75v1.75zm0-12.25h-78.75v-1.75h78.75v1.75z"></path><path fill="#2a94f4" d="M563.95 430.34v30.51c0 2.29 1.86 4.15 4.15 4.15h64.32l16.6 13.55V465H655c2.29 0 4.15-1.86 4.15-4.15v-30.51c0-2.29-1.86-4.15-4.15-4.15h-86.9c-2.29 0-4.15 1.85-4.15 4.15zm88.92 15.78h-51.75v-1.75h51.75v1.75zm-78.75 4.5h78.75v1.75h-78.75v-1.75zm0-12.25h78.75v1.75h-78.75v-1.75z"></path><ellipse cx="264" cy="555" fill="#ffbe55" opacity=".4" rx="13" ry="8" transform="rotate(-79.141 263.986 554.99)"></ellipse><ellipse cx="266.29" cy="543.69" fill="#ffbe55" opacity=".4" rx="8" ry="9.24" transform="rotate(-45.001 266.286 543.7)"></ellipse><ellipse cx="781" cy="555" fill="#ffbe55" opacity=".4" rx="13" ry="8" transform="rotate(-79.141 780.972 554.996)"></ellipse><ellipse cx="783.29" cy="543.69" fill="#ffbe55" opacity=".4" rx="8" ry="9.24" transform="rotate(-45.001 783.288 543.706)"></ellipse><path fill="#d3d3d3" d="M386 747H276c-2.21 0-4-1.79-4-4s1.79-4 4-4h110c2.21 0 4 1.79 4 4s-1.79 4-4 4zM571 747H461c-2.21 0-4-1.79-4-4s1.79-4 4-4h110c2.21 0 4 1.79 4 4s-1.79 4-4 4zM766 747H656c-2.21 0-4-1.79-4-4s1.79-4 4-4h110c2.21 0 4 1.79 4 4s-1.79 4-4 4zM482 769H372c-2.21 0-4-1.79-4-4s1.79-4 4-4h110c2.21 0 4 1.79 4 4s-1.79 4-4 4zM673 769H563c-2.21 0-4-1.79-4-4s1.79-4 4-4h110c2.21 0 4 1.79 4 4s-1.79 4-4 4z"></path></svg>
        </div>
    @endif

    <script>
        window.addEventListener('rowChatToBottom', event => {
            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight)
        });
    </script>

    <script>
        $(document).on('click','.return',function(){
            window.livewire.emit('resetComponent')
        })
    </script>
    <script>
        window.addEventListener('markMessageAsRead', event => {
            var value = document.querySelectorAll('.status_tick')

            value.array.forEach(element,index => {
                element.classList.remove('bi bi-check2')
                element.classList.add('bi bi-check2-all','text-primary')
            });
        })
    </script>
</div>
