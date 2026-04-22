@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Profil Tenaga Pendidik</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Membangun masa depan generasi bangsa dengan kasih sayang, disiplin, dan profesionalisme di SDN Cibinong 2."</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12 max-w-5xl mx-auto">
            <div class="md:w-2/5">
                <div class="relative group">
                    <div class="absolute -inset-4 border-2 border-blue-100 rounded-2xl group-hover:border-blue-200 transition-colors"></div>
                        <img src="{{ asset('img/ks.jpg') }}" alt="Kepala Sekolah" class="relative rounded-xl shadow-2xl w-full h-auto object-cover">                    <div class="absolute bottom-4 left-4 right-4 bg-[#002147] text-white p-4 rounded-lg shadow-lg">
                        <p class="text-xs font-bold uppercase tracking-widest text-blue-400">Kepala Sekolah</p>
                        <h3 class="text-lg font-bold">Nama Kepala Sekolah, S.Pd., M.Pd.</h3>
                    </div>
                </div>
            </div>
            <div class="md:w-3/5">
                <h2 class="text-3xl font-bold text-[#002147] mb-6">Sambutan Kepala Sekolah</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed text-lg">
                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                    <p>Puji syukur kita panjatkan ke hadirat Allah SWT atas karunia-Nya sehingga website SDN Cibinong 2 ini dapat hadir sebagai sarana informasi dan komunikasi.</p>
                    <p>Sebagai lembaga pendidikan, kami terus berupaya meningkatkan kualitas layanan pendidikan demi mencetak siswa yang berilmu, berkarakter, dan berprestasi. Kerjasama antara sekolah, orang tua, dan masyarakat adalah kunci utama keberhasilan pendidikan putra-putri kita.</p>
                    <p>Semoga informasi yang disajikan di sini bermanfaat bagi kita semua.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#002147]">Dewan Guru</h2>
            <div class="h-1.5 w-24 bg-blue-600 mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-500 mt-4">Pendidik profesional yang siap membimbing siswa-siswi SDN Cibinong 2</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                // Data 11 Guru
                $teachers = [
                    ['name' => 'Nama Guru 1, S.Pd.', 'role' => 'Wali Kelas 1A'],
                    ['name' => 'Nama Guru 2, S.Pd.', 'role' => 'Wali Kelas 1B'],
                    ['name' => 'Nama Guru 3, S.Pd.', 'role' => 'Wali Kelas 2'],
                    ['name' => 'Nama Guru 4, S.Pd.', 'role' => 'Wali Kelas 3A'],
                    ['name' => 'Nama Guru 5, S.Pd.', 'role' => 'Wali Kelas 3B'],
                    ['name' => 'Nama Guru 6, S.Pd.', 'role' => 'Wali Kelas 4'],
                    ['name' => 'Nama Guru 7, S.Pd.', 'role' => 'Wali Kelas 5A'],
                    ['name' => 'Nama Guru 8, S.Pd.', 'role' => 'Wali Kelas 5B'],
                    ['name' => 'Nama Guru 9, S.Pd.', 'role' => 'Wali Kelas 6'],
                    ['name' => 'Nama Guru 10, S.Pd.', 'role' => 'Guru Pendidikan Agama'],
                    ['name' => 'Nama Guru 11, S.Pd.', 'role' => 'Guru Olahraga (PJOK)'],
                ];
            @endphp

            @foreach($teachers as $index => $teacher)
            <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="overflow-hidden rounded-xl mb-4">
                        {{-- Mengambil foto berdasarkan urutan loop: 1.jpg, 2.jpg, dst --}}
                        <img src="{{ asset('img/' . ($index + 1) . '.jpg') }}"
                            alt="{{ $teacher['name'] }}"
                            class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-[#002147] group-hover:text-blue-600 transition-colors">{{ $teacher['name'] }}</h4>
                        <p class="text-sm text-blue-500 font-medium mt-1 uppercase tracking-tight">{{ $teacher['role'] }}</p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
