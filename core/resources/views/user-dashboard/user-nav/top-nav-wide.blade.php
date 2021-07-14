<li>        
    <a class="text-dark {{ isset($home) ? 'font-weight-bold' : '' }}" href="{{ Route('user.beranda') }}">Home</a>
</li>
<li>
    <a class="text-dark {{ isset($pendaftaran) ? 'font-weight-bold' : '' }}" href="{{ Route('user.pendaftaran') }}">Pendaftaran</a>
</li>
<li  class="pr-2">
    <a class="text-dark {{ isset($kelas_saya) ? 'font-weight-bold' : '' }}" href="">Kelas Saya</a>
</li>
<li>
    <a class="text-dark {{ isset($profile) ? 'font-weight-bold' : '' }}" href="">Profile</a>
</li>
<li>
    <a href="">
        <button type="button" class="btn btn-outline-danger waves-effect">Log Out</button>
    </a>
</li>