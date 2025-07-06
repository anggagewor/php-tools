# 🧰 PHP Tools

Kumpulan tool CLI pribadi yang dibuat untuk bantu development PHP, Laravel, dan ekosistemnya. Directory ini bisa lo clone/maintain di luar project Laravel utama biar tetap terorganisir.

---

## 📁 Struktur Folder

```
php-tools/
├── composer.json         # Buat autoload & dependency management
├── phpstan.neon          # Config PHPStan custom
├── bin/                  # (opsional) custom tool/command
└── [tool-name].php       # Bisa simpan helper script CLI pribadi
```

---

## ⚙️ Setup

```bash
composer install
```

Atau kalau baru inisialisasi:

```bash
composer init
```

---

## 🚀 Menjalankan PHPStan

```bash
vendor/bin/phpstan analyse
```

Kalau lo mau shortcut:

```bash
composer stan
```

Pastikan `composer.json` lo punya script:

```json
"scripts": {
    "stan": "phpstan analyse"
}
```

---

## 🧪 Tujuan Directory Ini

* Menyimpan tool seperti:

  * `phpstan`, `pint`, `csfixer`, dll
  * Script helper (convertor, scanner, dsb)
  * Analyzer untuk project Laravel/DDD
* Memisahkan tooling dari aplikasi production
* Bisa direuse lintas project tanpa re-setup

---

## 🔐 Tips

Kalau lo punya tool sensitif (API key, dsb):

* Simpan `.env` lokal di sini
* Jangan lupa tambahin `.gitignore`

---

## ✅ Todo

* [ ] Tambahin config Laravel Pint
* [ ] Tambahin helper CLI
* [ ] Tambah testing tools kalau perlu

---

Happy hacking with PHP! 🐘
