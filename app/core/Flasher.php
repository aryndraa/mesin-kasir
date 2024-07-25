<?php 
    
    class Flasher {

        public static function setFlash($pesan, $aksi, $tipe) {
             $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
             ];
        }

        public static function flash() {
            if(isset($_SESSION['flash'])) {
                echo'
                <div role="alert" class="alert alert-'. $_SESSION['flash']['tipe'] .' shadow-lg mb-6">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="stroke-info h-6 w-6 shrink-0">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <div class="text-white">
                    <h3 class="font-bold">Pemberitahuan</h3>
                    <div class="text-xs">
                        <p> 
                            ' . $_SESSION['flash']['pesan'] . '
                        </p> 
                        <p>
                            ' . $_SESSION['flash']['aksi'] . '
                        </p>
                    </div>
                  </div>
                  <button class="btn btn-sm">See</button>
                </div>
                ';
                unset($_SESSION['flash']);
            }
        }

    }

?>