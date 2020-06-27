<!-- Sidebar Dekstop Start -->
<aside id="main-sidebar" class="main-sidebar">
  <section id="sidebar" class="sidebar">
    <ul id="sidebar-menu" class="sidebar-menu">
      <!-- Main Menu Sart -->
      <li class="sidebar-header">MENU UTAMA</li>
      <li><a class="sidebar-item {{ (request()->is('home')) ? 'active' : '' }}" href="{{url('/home')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

      <li><a class="sidebar-item {{ (request()->is('karyawans')) || (request()->is('karyawans/create')) || (request()->is('karyawans/{$user->id}/edit')) ? 'active' : '' }}" href="{{url('/karyawans')}}"><i class="fas fa-folder-open"></i> Karyawan</a></li>

      <li><a class="sidebar-item {{ (request()->is('users')) || (request()->is('users/create')) || (request()->is('users/{$user->id}/edit')) ? 'active' : '' }}" href="{{url('/users')}}"><i class="fas fa-users" aria-hidden="true"></i> Data Pengguna</a></li>

      <li><a class="sidebar-item" href="absensi.html"><i class="fas fa-user-clock"></i> Absensi</a></li>
      <li><a class="sidebar-item" href="gajian.html"><i class="fas fa-trophy" aria-hidden="true"></i> Gajian</a></li>
      <li><a class="sidebar-item" href="laporan.html"><i class="fas fa-chart-pie"></i> Laporan</a></li>
      <!-- Main Menu End -->

      <!-- Setting Menu Start -->
      <li class="sidebar-header">PENGATURAN</li>
      <li><a class="sidebar-item" href="pengaturan-umum.html"><i class="fas fa-cogs"></i> Aplikasi</a></li>
      <li><a class="sidebar-item" href="pengaturan-gaji.html"><i class="fas fa-funnel-dollar"></i> Penggajian</a></li>
      <!-- Setting Menu End -->
    </ul>
  </section>
</aside>
<!-- Sidebar Dekstop End -->