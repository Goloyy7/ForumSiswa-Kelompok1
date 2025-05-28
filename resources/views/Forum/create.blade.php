<html lang="id" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Forum Matematika - Forum Sekolah</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <header class="bg-blue-700 text-white shadow">
    <div
      class="container mx-auto px-4 py-4 flex items-center justify-between"
    >
      <div class="flex items-center space-x-3">
        <img
          src="https://storage.googleapis.com/a1aa/image/52a8c1ff-8dfc-4438-84a9-184e70c4c92e.jpg"
          alt="Ilustrasi buku matematika dengan angka dan simbol matematika berwarna cerah"
          class="rounded-lg w-10 h-10 object-cover"
          width="40"
          height="40"
        />
        <h1 class="text-xl font-semibold">Forum Matematika</h1>
      </div>
      <nav class="hidden md:flex space-x-6 font-medium">
        <a href="#" class="hover:text-gray-200 transition">Beranda</a>
        <a href="#" class="hover:text-gray-200 transition">Diskusi</a>
        <a href="#" class="hover:text-gray-200 transition">Pengumuman</a>
        <a href="#" class="hover:text-gray-200 transition">Kontak</a>
      </nav>
      <button
        id="menu-btn"
        aria-label="Toggle menu"
        class="md:hidden focus:outline-none focus:ring-2 focus:ring-white"
      >
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
    <nav
      id="mobile-menu"
      class="md:hidden bg-blue-600 text-white px-4 py-3 space-y-2 hidden"
    >
      <a href="#" class="block hover:bg-blue-500 rounded px-2 py-1">Beranda</a>
      <a href="#" class="block hover:bg-blue-500 rounded px-2 py-1">Diskusi</a>
      <a href="#" class="block hover:bg-blue-500 rounded px-2 py-1"
        >Pengumuman</a
      >
      <a href="#" class="block hover:bg-blue-500 rounded px-2 py-1">Kontak</a>
    </nav>
  </header>

  <main class="container mx-auto px-4 py-8 flex-grow max-w-4xl">
    <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">
      Diskusi Forum Matematika
    </h2>

    <section aria-label="Form buat posting diskusi baru" class="mb-10">
      <form
        id="new-post-form"
        class="bg-white p-6 rounded-lg shadow space-y-4"
        autocomplete="off"
      >
        <h3 class="text-xl font-semibold text-blue-700 mb-4">
          Buat Diskusi Baru
        </h3>
        <div>
          <label
            for="post-title"
            class="block text-gray-700 font-medium mb-1"
            >Judul Diskusi</label
          >
          <input
            type="text"
            id="post-title"
            name="post-title"
            required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Contoh: Cara mudah memahami integral"
          />
        </div>
        <div>
          <label
            for="post-content"
            class="block text-gray-700 font-medium mb-1"
            >Isi Diskusi</label
          >
          <textarea
            id="post-content"
            name="post-content"
            rows="5"
            required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Tuliskan pertanyaan, pendapat, atau materi yang ingin didiskusikan..."
          ></textarea>
        </div>
        <button
          type="submit"
          class="bg-blue-700 text-white px-5 py-2 rounded hover:bg-blue-800 transition"
        >
          Kirim
        </button>
      </form>
    </section>

    <section aria-label="Daftar posting diskusi" class="space-y-6">
      <article
        class="bg-white p-6 rounded-lg shadow border border-gray-200"
        tabindex="0"
      >
        <header class="flex items-center justify-between mb-3">
          <h3 class="text-lg font-semibold text-blue-700">
            Cara mudah memahami integral
          </h3>
          <time
            datetime="2024-06-20T14:30"
            class="text-gray-500 text-sm flex items-center space-x-1"
            ><i class="fas fa-clock"></i><span>20 Juni 2024, 14:30</span></time
          >
        </header>
        <p class="text-gray-700 mb-4">
          Saya kesulitan memahami konsep integral dalam kalkulus. Apakah ada
          metode atau tips yang bisa membantu saya lebih mudah mengerti?
        </p>
        <div class="text-sm text-gray-600 flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fas fa-user"></i>
            <span>oleh Rina S.</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fas fa-comments"></i>
            <span>12 Balasan</span>
          </div>
        </div>
      </article>

      <article
        class="bg-white p-6 rounded-lg shadow border border-gray-200"
        tabindex="0"
      >
        <header class="flex items-center justify-between mb-3">
          <h3 class="text-lg font-semibold text-blue-700">
            Pembahasan soal limit fungsi trigonometri
          </h3>
          <time
            datetime="2024-06-19T18:15"
            class="text-gray-500 text-sm flex items-center space-x-1"
            ><i class="fas fa-clock"></i><span>19 Juni 2024, 18:15</span></time
          >
        </header>
        <p class="text-gray-700 mb-4">
          Ada yang bisa membantu menjelaskan langkah-langkah menyelesaikan soal
          limit berikut? <br />
          <code>lim x→0 (sin 3x) / (2x)</code>
        </p>
        <div class="text-sm text-gray-600 flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fas fa-user"></i>
            <span>oleh Budi T.</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fas fa-comments"></i>
            <span>8 Balasan</span>
          </div>
        </div>
      </article>

      <article
        class="bg-white p-6 rounded-lg shadow border border-gray-200"
        tabindex="0"
      >
        <header class="flex items-center justify-between mb-3">
          <h3 class="text-lg font-semibold text-blue-700">
            Tips menghafal rumus-rumus matematika dengan cepat
          </h3>
          <time
            datetime="2024-06-18T10:00"
            class="text-gray-500 text-sm flex items-center space-x-1"
            ><i class="fas fa-clock"></i><span>18 Juni 2024, 10:00</span></time
          >
        </header>
        <p class="text-gray-700 mb-4">
          Bagaimana cara kalian menghafal rumus-rumus matematika? Saya sering
          lupa dan butuh tips agar lebih efektif.
        </p>
        <div class="text-sm text-gray-600 flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fas fa-user"></i>
            <span>oleh Sari W.</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fas fa-comments"></i>
            <span>15 Balasan</span>
          </div>
        </div>
      </article>

      <article
        class="bg-white p-6 rounded-lg shadow border border-gray-200"
        tabindex="0"
      >
        <header class="flex items-center justify-between mb-3">
          <h3 class="text-lg font-semibold text-blue-700">
            Perbedaan antara fungsi linear dan kuadrat
          </h3>
          <time
            datetime="2024-06-17T16:45"
            class="text-gray-500 text-sm flex items-center space-x-1"
            ><i class="fas fa-clock"></i><span>17 Juni 2024, 16:45</span></time
          >
        </header>
        <p class="text-gray-700 mb-4">
          Saya masih bingung membedakan fungsi linear dan kuadrat. Bisa
          jelaskan perbedaan utama dan contohnya?
        </p>
        <div class="text-sm text-gray-600 flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fas fa-user"></i>
            <span>oleh Andi P.</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fas fa-comments"></i>
            <span>5 Balasan</span>
          </div>
        </div>
      </article>

      <article
        class="bg-white p-6 rounded-lg shadow border border-gray-200"
        tabindex="0"
      >
        <header class="flex items-center justify-between mb-3">
          <h3 class="text-lg font-semibold text-blue-700">
            Contoh soal dan pembahasan persamaan kuadrat
          </h3>
          <time
            datetime="2024-06-16T09:20"
            class="text-gray-500 text-sm flex items-center space-x-1"
            ><i class="fas fa-clock"></i><span>16 Juni 2024, 09:20</span></time
          >
        </header>
        <p class="text-gray-700 mb-4">
          Tolong bantu buatkan contoh soal persamaan kuadrat beserta
          pembahasannya secara lengkap.
        </p>
        <div class="text-sm text-gray-600 flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fas fa-user"></i>
            <span>oleh Dewi L.</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fas fa-comments"></i>
            <span>10 Balasan</span>
          </div>
        </div>
      </article>
    </section>
  </main>

  <footer class="bg-blue-700 text-white py-6 mt-auto">
    <div class="container mx-auto px-4 text-center text-sm">
      © 2024 Forum Sekolah. Semua hak cipta dilindungi.
    </div>
  </footer>

  <script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    // Simple form submission simulation
    const form = document.getElementById("new-post-form");
    const discussionSection = form.nextElementSibling;

    form.addEventListener("submit", (e) => {
      e.preventDefault();

      const title = form["post-title"].value.trim();
      const content = form["post-content"].value.trim();

      if (!title || !content) return;

      const now = new Date();
      const dateStr = now.toLocaleDateString("id-ID", {
        day: "2-digit",
        month: "long",
        year: "numeric",
      });
      const timeStr = now.toLocaleTimeString("id-ID", {
        hour: "2-digit",
        minute: "2-digit",
      });

      // Create new article element
      const article = document.createElement("article");
      article.setAttribute("tabindex", "0");
      article.className =
        "bg-white p-6 rounded-lg shadow border border-gray-200";

      article.innerHTML = `
        <header class="flex items-center justify-between mb-3">
          <h3 class="text-lg font-semibold text-blue-700">${title}</h3>
          <time datetime="${now.toISOString()}" class="text-gray-500 text-sm flex items-center space-x-1">
            <i class="fas fa-clock"></i><span>${dateStr}, ${timeStr}</span>
          </time>
        </header>
        <p class="text-gray-700 mb-4">${content.replace(
          /\n/g,
          "<br />"
        )}</p>
        <div class="text-sm text-gray-600 flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fas fa-user"></i>
            <span>oleh Anda</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fas fa-comments"></i>
            <span>0 Balasan</span>
          </div>
        </div>
      `;

      discussionSection.prepend(article);

      form.reset();
      form["post-title"].focus();
    });
  </script>
</body>
</html>