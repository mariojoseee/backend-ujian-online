@component('mail::message')

  {{ $data['title'] }} <br>

  {{-- Detail akun: --}}
  Silahkan melakukan login dengan cara menekan tombol <b>"Kunjungi Website"</b> menggunakan NUPTK dan password dibawah ini <br>

  NUPTK : {{ $data['nuptk'] }} <br>
  PASSWORD : {{ $data['password'] }}

  @component('mail::button', ['url' => $data['url']])
    Kunjungi Website
  @endcomponent

  Diharapkan setelah melakukan login diwajibkan untuk <b>mengubah password dan melakukan update profil</b> pada menu dashboard!<br>


  Terimakasih,<br>

  {{ Auth::guard('admin')->user()->nama }}
@endcomponent
