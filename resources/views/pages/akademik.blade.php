@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Akademik</h1>
        <p class="text-gray-500 max-w-2xl mx-auto">Informasi mengenai sistem pembelajaran, kurikulum, dan program pendidikan di SDN Cibinong 2.</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <img src="{{ asset('img/1.jpg') }}" alt="Kegiatan Belajar" class="rounded-3xl shadow-2xl w-full h-[400px] object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-[#002147] mb-6">Kurikulum Merdeka</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    SDN Cibinong 2 telah menerapkan **Kurikulum Merdeka** yang berfokus pada pengembangan karakter dan kompetensi siswa. Kami memberikan keleluasaan bagi pendidik untuk menciptakan pembelajaran yang berkualitas yang sesuai dengan kebutuhan dan lingkungan belajar peserta didik.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="bg-blue-100 p-1 rounded-full text-blue-600 mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Pembelajaran Berbasis Projek (P5)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="bg-blue-100 p-1 rounded-full text-blue-600 mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Fokus pada Materi Esensial</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="bg-blue-100 p-1 rounded-full text-blue-600 mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Pemanfaatan Teknologi Digital</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#002147]">Program Unggulan</h2>
            <div class="h-1.5 w-20 bg-blue-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center text-white text-2xl mb-6">
                    <i class="fas fa-language"></i>
                </div>
                <h3 class="text-xl font-bold text-[#002147] mb-4">Literasi & Numerasi</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Program pembiasaan membaca dan berhitung cepat setiap pagi sebelum KBM dimulai.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-14 h-14 bg-green-500 rounded-xl flex items-center justify-center text-white text-2xl mb-6">
                    <i class="fas fa-mosque"></i>
                </div>
                <h3 class="text-xl font-bold text-[#002147] mb-4">Pembiasaan Agama</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Kegiatan keagamaan rutin seperti Shalat Dhuha berjamaah dan tadarus Al-Qur'an.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-14 h-14 bg-orange-500 rounded-xl flex items-center justify-center text-white text-2xl mb-6">
                    <i class="fas fa-running"></i>
                </div>
                <h3 class="text-xl font-bold text-[#002147] mb-4">Ekstrakurikuler Olahraga</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Mengembangkan bakat atletik dan sportivitas siswa melalui berbagai cabang olahraga prestasi.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-[#002147] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Ingin Bergabung Bersama Kami?</h2>
        <p class="text-blue-200 mb-8 max-w-xl mx-auto">Buka masa depan cerah putra-putri Anda dengan pendidikan terbaik di SDN Cibinong 2.</p>
        <a href="#" class="bg-white text-[#002147] px-10 py-4 rounded-full font-bold hover:bg-blue-50 transition inline-block">
            Daftar PPDB 2026
        </a>
    </div>
</section>
@endsection
