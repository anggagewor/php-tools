# 🧰 PHP Tools

Kumpulan tool CLI pribadi yang dibuat untuk bantu development PHP, Laravel, dan ekosistemnya. Directory ini bisa lo clone/maintain di luar project Laravel utama biar tetap terorganisir.

---

## 📁 Struktur Folder

```
php-tools/
├── bin/console            # Entry point CLI (Symfony Console)
├── composer.json          # Autoload & dependency management
├── phpstan.neon           # Config PHPStan custom
├── stubs/command.stub     # Template command generator
├── src/Commands/          # Semua custom command disimpan di sini
└── vendor/                # Composer dependencies
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

## 🚀 CLI Tools

Jalankan:

```bash
php bin/console
```

### ✨ Contoh Command:

| Command        | Keterangan                       |
| -------------- | -------------------------------- |
| `hello`        | Sample command                   |
| `make:command` | Generate command baru pakai stub |

---

## 🛠 Generate Command Baru

```bash
php bin/console make:command ToolPingCommand tool:ping "Ping the system"
```

Akan membuat file:

```
src/Commands/ToolPingCommand.php
```

Isi class diambil dari `stubs/command.stub`.

### ✨ Command akan auto-terdaftar

Selama class punya attribute `#[AsCommand(...)]`, lo gak perlu register manual.

---

## 🥪 Tujuan Directory Ini

* Simpan tool seperti:

  * `phpstan`, `pint`, `csfixer`, dsb
  * Script helper (convertor, scanner, CLI task)
* Bisa direuse lintas project tanpa re-setup
* Terpisah dari project Laravel utama


---

## 📜 Composer Scripts

Shortcut untuk tools via `composer.json`:

```json
"scripts": {
    "stan": "phpstan analyse"
}
```

Lalu jalankan:

```bash
composer stan
```

---

## ✅ Todo

* [x] Auto-register Symfony command via attribute
* [x] Stub-based command generator (`make:command`)
* [ ] `--force` untuk overwrite command
* [ ] Mode interaktif `make:command`
* [ ] Tambah tools lain (tester, faker, dsb)

---

Happy hacking with PHP! 🐘
