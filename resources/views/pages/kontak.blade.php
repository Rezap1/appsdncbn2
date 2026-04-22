@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Hubungi Kami</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Kami siap melayani informasi seputar akademik dan pendaftaran siswa baru di SDN Cibinong 2."</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-[#002147] mb-6">Detail Kontak</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p class="font-bold text-[#002147]">Lokasi Sekolah</p>
                                <p class="text-gray-500 text-sm leading-relaxed">
                                    Jl. Raya Patrol-Agribinta, Pananggapan, <br>
                                    Kec. Cibinong, Kabupaten Cianjur, <br>
                                    Jawa Barat 43271 (Kode Plus: M3PR+GW7)
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 flex-shrink-0">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-[#002147]">WhatsApp Administrasi</p>
                                <p class="text-gray-500 text-sm">+62 812-xxxx-xxxx</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p class="font-bold text-[#002147]">Email Resmi</p>
                                <p class="text-gray-500 text-sm">sdncibinong2cianjur@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full h-80 rounded-2xl overflow-hidden shadow-inner bg-gray-200 relative border-4 border-white shadow-xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.534888846387!2d107.0345!3d-7.2936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6907400a4212d7%3A0x52f88e3c3c6ea133!2sSDN%20Cibinong%202!5e0!3m2!1sid!2sid!4v1715000000000!5m2!1sid!2sid"
                        class="w-full h-full border-0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="bg-gray-50 p-8 md:p-12 rounded-3xl border border-gray-100">
                <h3 class="text-2xl font-bold text-[#002147] mb-2">Kirim Pesan Online</h3>
                <p class="text-gray-500 text-sm mb-8">Punya pertanyaan? Tulis pesan di bawah ini dan kami akan membalas secepat mungkin.</p>

                <form action="#" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-[#002147] uppercase mb-2">Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan nama Anda" class="w-full px-4 py-3 rounded-xl border-gray-200 focus:ring-2 focus:ring-blue-600 text-sm transition outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-[#002147] uppercase mb-2">Nomor HP</label>
                            <input type="text" placeholder="Contoh: 0812..." class="w-full px-4 py-3 rounded-xl border-gray-200 focus:ring-2 focus:ring-blue-600 text-sm transition outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#002147] uppercase mb-2">Tujuan Pertanyaan</label>
                        <select class="w-full px-4 py-3 rounded-xl border-gray-200 focus:ring-2 focus:ring-blue-600 text-sm transition outline-none appearance-none bg-white">
                            <option>Informasi Pendaftaran (PPDB)</option>
                            <option>Pertanyaan Akademik</option>
                            <option>Masalah Teknis Website</option>
                            <option>Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#002147] uppercase mb-2">Isi Pesan</label>
                        <textarea rows="5" placeholder="Apa yang bisa kami bantu?" class="w-full px-4 py-3 rounded-xl border-gray-200 focus:ring-2 focus:ring-blue-600 text-sm transition outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-[#002147] text-white font-bold py-4 rounded-xl shadow-lg hover:bg-blue-800 transition flex items-center justify-center gap-3 active:scale-95 transition-transform">
                        Kirim Pesan Sekarang <i class="fas fa-paper-plane text-xs"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
