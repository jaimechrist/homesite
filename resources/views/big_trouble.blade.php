<x-layout>
    <p id="rrr" class="text-white bg-danger w-100 vh-100" style="font-size: 8.5em">Ruh Roe Raggy!!!</p>

    <div class="toast-container position-absolute p-3 top-50 start-50 translate-middle" id="toastPlacement">
        <div id="virusloaded" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto h5">ImInuRBaNkacCouNt.pl</strong>
            </div>
            <div class="toast-body text-danger bg-light">
                <div class="d-flex">
                    <p class="h6">
                        Installing software <i class="fa-solid fa-exclamation fa-beat-fade" style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;"></i>
                    </p>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <a class="btn btn-primary" href="/">Cancel</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            let toggle = ['white', 'danger'];

            let toast = new bootstrap.Toast($('#virusloaded'), {
                autohide: false
            });

            toast.show(); 

            let flasher = setInterval(function() {
                t = $('#rrr').hasClass('text-white') ? 1 : 0;
                b = $('#rrr').hasClass('bg-white') ? 1 : 0;

                $('#rrr').removeClass('text-white text-danger bg-white bg-danger');
                $('#rrr').addClass(`text-${toggle[t]} bg-${toggle[b]}`);
            }, 1200);
        });
    </script>
</x-layout>
