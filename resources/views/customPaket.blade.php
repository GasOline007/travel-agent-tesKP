@extends('layouts')

@section('title', 'Custom Paket - Arfaka Tour and Travel')

@section('content')

<div class="min-h-screen bg-zinc-50 py-32 px-4 md:px-6 lg:px-12">
    <div class="max-w-3xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-12">
            <span class="text-travel-primary font-semibold tracking-widest text-sm uppercase mb-3 block">
                Buat Perjalananmu Sendiri
            </span>
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">
                Custom Paket Wisata
            </h1>
            <p class="text-gray-500 text-base md:text-lg max-w-xl mx-auto leading-relaxed">
                Tidak menemukan paket yang sesuai? Ceritakan perjalanan impianmu dan tim kami akan merancangnya khusus untuk Anda.
            </p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-10"
            x-data="customPackageForm()">

            {{-- Step Indicator --}}
            <div class="flex items-center justify-center gap-2 mb-10">
                <template x-for="(label, i) in steps" :key="i">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold transition-all duration-300"
                                :class="currentStep > i + 1
                                    ? 'bg-travel-secondary text-white'
                                    : currentStep === i + 1
                                        ? 'bg-travel-primary text-white'
                                        : 'bg-gray-100 text-gray-400'">
                                <template x-if="currentStep > i + 1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </template>
                                <template x-if="currentStep <= i + 1">
                                    <span x-text="i + 1"></span>
                                </template>
                            </div>
                            <span class="hidden md:block text-xs font-semibold transition-colors duration-300"
                                :class="currentStep === i + 1 ? 'text-gray-900' : 'text-gray-400'"
                                x-text="label">
                            </span>
                        </div>
                        <div class="w-8 md:w-12 h-px bg-gray-200 last:hidden" x-show="i < steps.length - 1"></div>
                    </div>
                </template>
            </div>

            {{-- STEP 1: Destinasi & Tanggal --}}
            <div x-show="currentStep === 1" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0">

                <h2 class="text-xl font-bold text-gray-900 mb-6">Destinasi & Jadwal</h2>

                <div class="space-y-5">

                    {{-- Tujuan --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Tujuan Wisata <span class="text-red-400">*</span>
                        </label>
                        <input type="text"
                            x-model="form.destination"
                            placeholder="Contoh: Bali, Raja Ampat, Labuan Bajo..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-travel-primary focus:ring-2 focus:ring-travel-primary/20 outline-none transition text-sm">
                        <p class="text-xs text-red-400 mt-1" x-show="errors.destination" x-text="errors.destination"></p>
                    </div>

                    {{-- Tanggal --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Tanggal Berangkat <span class="text-red-400">*</span>
                            </label>
                            <input type="date"
                                x-model="form.departureDate"
                                :min="today"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-travel-primary focus:ring-2 focus:ring-travel-primary/20 outline-none transition text-sm">
                            <p class="text-xs text-red-400 mt-1" x-show="errors.departureDate" x-text="errors.departureDate"></p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Durasi Perjalanan <span class="text-red-400">*</span>
                            </label>
                            <select x-model="form.duration"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-travel-primary focus:ring-2 focus:ring-travel-primary/20 outline-none transition text-sm">
                                <option value="">Pilih durasi</option>
                                <option value="1 hari">1 Hari</option>
                                <option value="2 hari 1 malam">2 Hari 1 Malam</option>
                                <option value="3 hari 2 malam">3 Hari 2 Malam</option>
                                <option value="4 hari 3 malam">4 Hari 3 Malam</option>
                                <option value="5 hari 4 malam">5 Hari 4 Malam</option>
                                <option value="lebih dari 5 hari">Lebih dari 5 Hari</option>
                            </select>
                            <p class="text-xs text-red-400 mt-1" x-show="errors.duration" x-text="errors.duration"></p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- STEP 2: Peserta & Budget --}}
            <div x-show="currentStep === 2" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0">

                <h2 class="text-xl font-bold text-gray-900 mb-6">Peserta & Anggaran</h2>

                <div class="space-y-5">

                    {{-- Kapasitas --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Jumlah Peserta <span class="text-red-400">*</span>
                        </label>
                        <div class="flex items-center gap-4">
                            <button type="button"
                                @click="form.participants = Math.max(1, form.participants - 1)"
                                class="w-10 h-10 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center font-bold text-gray-600 transition cursor-pointer">
                                −
                            </button>
                            <span class="text-2xl font-bold text-gray-900 w-10 text-center" x-text="form.participants"></span>
                            <button type="button"
                                @click="form.participants++"
                                class="w-10 h-10 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center font-bold text-gray-600 transition cursor-pointer">
                                +
                            </button>
                            <span class="text-sm text-gray-400">orang</span>
                        </div>
                    </div>

                    {{-- Tipe Peserta --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Tipe Perjalanan</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <template x-for="type in ['Keluarga', 'Pasangan', 'Rombongan', 'Solo']" :key="type">
                                <button type="button"
                                    @click="form.tripType = type"
                                    :class="form.tripType === type
                                        ? 'border-travel-primary bg-travel-primary/5 text-travel-primary font-semibold'
                                        : 'border-gray-200 bg-gray-50 text-gray-500 hover:border-gray-300'"
                                    class="px-3 py-2.5 rounded-xl border text-sm transition-all duration-200 cursor-pointer"
                                    x-text="type">
                                </button>
                            </template>
                        </div>
                    </div>

                    {{-- Budget --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Estimasi Budget <span class="text-red-400">*</span>
                            <span class="text-gray-400 font-normal">(per orang)</span>
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <template x-for="budget in budgetOptions" :key="budget.value">
                                <button type="button"
                                    @click="form.budget = budget.value"
                                    :class="form.budget === budget.value
                                        ? 'border-travel-primary bg-travel-primary/5 text-travel-primary font-semibold'
                                        : 'border-gray-200 bg-gray-50 text-gray-500 hover:border-gray-300'"
                                    class="px-4 py-3 rounded-xl border text-sm text-left transition-all duration-200 cursor-pointer">
                                    <span x-text="budget.label" class="block font-semibold"></span>
                                    <span x-text="budget.desc" class="text-xs text-gray-400 font-normal"></span>
                                </button>
                            </template>
                        </div>
                        <p class="text-xs text-red-400 mt-1" x-show="errors.budget" x-text="errors.budget"></p>
                    </div>

                </div>
            </div>

            {{-- STEP 3: Preferensi & Kontak --}}
            <div x-show="currentStep === 3" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0">

                <h2 class="text-xl font-bold text-gray-900 mb-6">Preferensi & Kontak</h2>

                <div class="space-y-5">

                    {{-- Fasilitas --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Fasilitas yang Diinginkan</label>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="item in facilitiesOptions" :key="item">
                                <button type="button"
                                    @click="toggleFacility(item)"
                                    :class="form.facilities.includes(item)
                                        ? 'bg-travel-primary text-white border-travel-primary'
                                        : 'bg-gray-50 text-gray-500 border-gray-200 hover:border-gray-300'"
                                    class="px-4 py-2 rounded-full border text-sm transition-all duration-200 cursor-pointer"
                                    x-text="item">
                                </button>
                            </template>
                        </div>
                    </div>

                    {{-- Catatan Tambahan --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Permintaan / Catatan Khusus
                        </label>
                        <textarea x-model="form.notes" rows="3"
                            placeholder="Contoh: ada lansia, alergi makanan tertentu, ingin wisata religi, dll..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-travel-primary focus:ring-2 focus:ring-travel-primary/20 outline-none transition text-sm resize-none">
                        </textarea>
                    </div>

                    {{-- Nama --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Anda <span class="text-red-400">*</span>
                            </label>
                            <input type="text"
                                x-model="form.name"
                                placeholder="Nama lengkap"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-travel-primary focus:ring-2 focus:ring-travel-primary/20 outline-none transition text-sm">
                            <p class="text-xs text-red-400 mt-1" x-show="errors.name" x-text="errors.name"></p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                No. WhatsApp <span class="text-red-400">*</span>
                            </label>
                            <input type="tel"
                                x-model="form.phone"
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-travel-primary focus:ring-2 focus:ring-travel-primary/20 outline-none transition text-sm">
                            <p class="text-xs text-red-400 mt-1" x-show="errors.phone" x-text="errors.phone"></p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- STEP 4: Ringkasan --}}
            <div x-show="currentStep === 4" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0">

                <h2 class="text-xl font-bold text-gray-900 mb-6">Ringkasan Permintaan</h2>

                <div class="bg-zinc-50 rounded-2xl border border-gray-100 divide-y divide-gray-100 mb-6">

                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">Nama</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.name"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">No. WhatsApp</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.phone"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">Tujuan</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.destination"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">Tanggal</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="formatDate(form.departureDate)"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">Durasi</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.duration"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">Peserta</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.participants + ' orang (' + form.tripType + ')'"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4">
                        <span class="text-sm text-gray-500 font-medium">Budget/orang</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.budget"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4" x-show="form.facilities.length > 0">
                        <span class="text-sm text-gray-500 font-medium">Fasilitas</span>
                        <span class="text-sm font-semibold text-gray-900 text-right" x-text="form.facilities.join(', ')"></span>
                    </div>
                    <div class="flex justify-between items-start px-5 py-4" x-show="form.notes">
                        <span class="text-sm text-gray-500 font-medium shrink-0">Catatan</span>
                        <span class="text-sm font-semibold text-gray-900 text-right ml-4" x-text="form.notes"></span>
                    </div>
                </div>

                <p class="text-xs text-gray-400 text-center leading-relaxed">
                    Dengan menekan tombol di bawah, Anda akan diarahkan ke WhatsApp admin kami dengan detail permintaan yang telah diisi.
                </p>

            </div>

            {{-- Navigasi Tombol --}}
            <div class="flex items-center justify-between mt-10 pt-6 border-t border-gray-100">

                {{-- Tombol Back --}}
                <button type="button"
                    @click="prevStep"
                    x-show="currentStep > 1"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-gray-600 hover:bg-gray-50 transition cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Kembali
                </button>

                <div x-show="currentStep === 1"></div>

                {{-- Tombol Next / Kirim --}}
                <button type="button"
                    @click="currentStep < 4 ? nextStep() : sendToWhatsApp()"
                    class="inline-flex items-center gap-2 px-7 py-2.5 rounded-xl text-sm font-bold transition-all duration-300 cursor-pointer"
                    :class="currentStep === 4
                        ? 'bg-travel-secondary hover:bg-travel-secondary-dark text-white shadow-lg shadow-travel-secondary/30'
                        : 'bg-travel-primary hover:bg-travel-primary-dark text-white shadow-lg shadow-travel-primary/30'">

                    <template x-if="currentStep < 4">
                        <span>Lanjut</span>
                    </template>
                    <template x-if="currentStep === 4">
                        <span>Kirim via WhatsApp</span>
                    </template>

                    <template x-if="currentStep < 4">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </template>
                    <template x-if="currentStep === 4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                    </template>
                </button>

            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
function customPackageForm() {
    return {
        currentStep: 1,
        steps: ['Destinasi', 'Peserta', 'Preferensi', 'Ringkasan'],

        today: new Date().toISOString().split('T')[0],

        budgetOptions: [
            { value: 'Di bawah Rp 500.000',        label: '< Rp 500.000',       desc: 'Budget hemat' },
            { value: 'Rp 500.000 – Rp 1.000.000',  label: 'Rp 500rb – 1jt',     desc: 'Budget menengah' },
            { value: 'Rp 1.000.000 – Rp 2.500.000',label: 'Rp 1jt – 2,5jt',     desc: 'Budget nyaman' },
            { value: 'Di atas Rp 2.500.000',        label: '> Rp 2.500.000',     desc: 'Budget premium' },
        ],

        facilitiesOptions: [
            'Hotel', 'Transportasi', 'Guide Lokal', 'Makan 3x',
            'Tiket Wisata', 'Dokumentasi', 'Asuransi', 'Tiket Pesawat'
        ],

        form: {
            name:          '',
            phone:         '',
            destination:   '',
            departureDate: '',
            duration:      '',
            participants:  2,
            tripType:      'Keluarga',
            budget:        '',
            facilities:    [],
            notes:         '',
        },

        errors: {},

        toggleFacility(item) {
            if (this.form.facilities.includes(item)) {
                this.form.facilities = this.form.facilities.filter(f => f !== item);
            } else {
                this.form.facilities.push(item);
            }
        },

        validateStep() {
            this.errors = {};

            if (this.currentStep === 1) {
                if (!this.form.destination.trim()) this.errors.destination = 'Tujuan wisata wajib diisi.';
                if (!this.form.departureDate)      this.errors.departureDate = 'Tanggal berangkat wajib diisi.';
                if (!this.form.duration)           this.errors.duration = 'Pilih durasi perjalanan.';
            }

            if (this.currentStep === 2) {
                if (!this.form.budget) this.errors.budget = 'Pilih estimasi budget.';
            }

            if (this.currentStep === 3) {
                if (!this.form.name.trim())  this.errors.name = 'Nama wajib diisi.';
                if (!this.form.phone.trim()) this.errors.phone = 'No. WhatsApp wajib diisi.';
            }

            return Object.keys(this.errors).length === 0;
        },

        nextStep() {
            if (this.validateStep()) this.currentStep++;
        },

        prevStep() {
            if (this.currentStep > 1) this.currentStep--;
        },

        formatDate(dateStr) {
            if (!dateStr) return '-';
            const date = new Date(dateStr);
            return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
        },

        sendToWhatsApp() {
            const f = this.form;
            const facilities = f.facilities.length > 0 ? f.facilities.join(', ') : 'Tidak ada preferensi khusus';
            const notes = f.notes.trim() || 'Tidak ada';

            const message =
`Halo Arfaka Tour and Travel! 👋

Saya ingin mengajukan *Request Custom Paket Wisata* dengan detail berikut:

🙋 *Data Pemesan*
- Nama     : ${f.name}
- WhatsApp : ${f.phone}

🗺️ *Detail Perjalanan*
- Tujuan   : ${f.destination}
- Tanggal  : ${this.formatDate(f.departureDate)}
- Durasi   : ${f.duration}

👥 *Peserta*
- Jumlah   : ${f.participants} orang
- Tipe     : ${f.tripType}

💰 *Anggaran*
- Budget   : ${f.budget} (per orang)

✅ *Fasilitas yang Diinginkan*
${facilities}

📝 *Catatan Tambahan*
${notes}

Mohon bantuannya untuk merancang paket sesuai kebutuhan saya. Terima kasih! 🙏`;

            const waNumber = '{{ env("WHATSAPP_NUMBER") }}';
            const encoded  = encodeURIComponent(message);
            window.open(`https://wa.me/${waNumber}?text=${encoded}`, '_blank');
        }
    }
}
</script>
@endpush

@endsection