@session('success')
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="successToast" class="toast livetoast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-success text-white">
        <strong class="me-auto text-white">{{ auth()->user()->name }}</strong>
        <small class="text-body-secondary text-white" id="timer">0h 0m 0s ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        {{ session('success') }}
      </div>
    </div>
  </div>
@endsession



<script>
  document.addEventListener('DOMContentLoaded', function() {
    var toastElement = document.getElementById('successToast');
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
  });
</script>

<script>
  let seconds = 0; // Waktu awal (0 detik)
  const timerElement = document.getElementById('timer');

  // Fungsi untuk memperbarui waktu
  function updateTimer() {
    seconds++;

    // Hitung jam, menit, dan detik
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const secs = seconds % 60;

    // Perbarui teks di elemen timer
    timerElement.textContent = `${hours}h ${minutes}m ${secs}s ago`;
  }

  // Jalankan fungsi updateTimer setiap 1 detik (1000ms)
  setInterval(updateTimer, 1000);
</script>


{{-- sweet alert --}}
@if ($errors->any())
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        type: 'warning',
        icon: 'error',
        title: 'Oops...',
        html: `
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
      });
    });
  </script>
@endif

@if (session('service'))
  <div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Warning</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
          </button>
        </div>
        <div class="modal-body">{{ session('service') }}</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <form action="{{ route('suspend', session('token')) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-primary">Tangguhkan Akun</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Cek jika modal ada di halaman
        var modal = document.getElementById('basicModal');
        if (modal) {
            var serviceMessage = "{{ session('service') }}";
            // Jika ada session service, tampilkan modal
            if (serviceMessage) {
                var myModal = new bootstrap.Modal(modal);
                myModal.show();
            }
        }
    });
</script>
