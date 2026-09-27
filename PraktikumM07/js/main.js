// =====================================================
// 1. TYPING EFFECT (khusus Home)
// =====================================================
const typingText = document.getElementById("typing-text");

if (typingText) {
  const names = ["Charles Wong", "Web Developer", "Mahasiswa SI"];
  let nameIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  function typeEffect() {
    const currentName = names[nameIndex];

    if (isDeleting) {
      charIndex--;
    } else {
      charIndex++;
    }

    typingText.textContent = currentName.substring(0, charIndex);

    let delay = isDeleting ? 50 : 100;

    if (!isDeleting && charIndex === currentName.length) {
      delay = 2000; // Jeda saat teks selesai diketik
      isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      nameIndex = (nameIndex + 1) % names.length;
      delay = 500; // Jeda sebelum mengetik kata baru
    }

    setTimeout(typeEffect, delay);
  }

  typeEffect();
}

// =====================================================
// 2. GENERATE PROJECT CARDS (khusus Home)
// =====================================================
const projectGrid = document.getElementById("project-grid");

if (projectGrid) {
  const projects = [
    {
      title: "Website Profil",
      desc: "Website profil dengan HTML & CSS",
      image: "images/project-web.svg",
    },
    {
      title: "Kalkulator JS",
      desc: "Kalkulator interaktif dengan JavaScript",
      image: "images/project-calculator.svg",
    },
    {
      title: "Form Interaktif",
      desc: "Form pendaftaran dengan validasi input",
      image: "images/project-form.svg",
    },
  ];

  projects.forEach((project) => {
    const card = document.createElement("div");
    card.className = "project-card";

    card.innerHTML = `
        <img src="${project.image}" alt="${project.title}">
        <h3>${project.title}</h3>
        <p>${project.desc}</p>
    `;

    card.addEventListener("click", () => {
      alert(`Anda memilih proyek: ${project.title}`);
    });

    projectGrid.appendChild(card);
  });
}

// =====================================================
// 3. DARK MODE TOGGLE (semua halaman) — fitur tambahan
// =====================================================
const themeToggle = document.getElementById("theme-toggle");
const body = document.body;

function applyTheme(theme) {
  if (theme === "dark") {
    body.classList.add("dark-mode");
    if (themeToggle) themeToggle.textContent = "☀️";
  } else {
    body.classList.remove("dark-mode");
    if (themeToggle) themeToggle.textContent = "🌙";
  }
}

// Muat preferensi tema yang tersimpan (kalau ada)
const savedTheme = localStorage.getItem("theme") || "light";
applyTheme(savedTheme);

if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    const isDark = body.classList.contains("dark-mode");
    const newTheme = isDark ? "light" : "dark";
    applyTheme(newTheme);
    localStorage.setItem("theme", newTheme);
  });
}

// =====================================================
// 4. VALIDASI FORM CONTACT (khusus halaman Contact)
// =====================================================
const contactForm = document.getElementById("contact-form");

if (contactForm) {
  const nameField = document.getElementById("name");
  const emailField = document.getElementById("email");
  const messageField = document.getElementById("message");
  const formStatus = document.getElementById("form-status");

  function showError(field, message) {
    const group = field.closest(".form-group");
    group.classList.add("has-error");
    group.querySelector(".error-message").textContent = message;
  }

  function clearError(field) {
    const group = field.closest(".form-group");
    group.classList.remove("has-error");
    group.querySelector(".error-message").textContent = "";
  }

  function isValidEmail(value) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
  }

  function validateField(field) {
    const value = field.value.trim();

    if (field === nameField) {
      if (value.length < 3) {
        showError(field, "Nama minimal 3 karakter.");
        return false;
      }
    }

    if (field === emailField) {
      if (!isValidEmail(value)) {
        showError(field, "Format email tidak valid.");
        return false;
      }
    }

    if (field === messageField) {
      if (value.length < 10) {
        showError(field, "Pesan minimal 10 karakter.");
        return false;
      }
    }

    clearError(field);
    return true;
  }

  [nameField, emailField, messageField].forEach((field) => {
    field.addEventListener("input", () => validateField(field));
  });

  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const validName = validateField(nameField);
    const validEmail = validateField(emailField);
    const validMessage = validateField(messageField);

    formStatus.className = "form-status";

    if (validName && validEmail && validMessage) {
      formStatus.textContent = `Terima kasih, ${nameField.value.trim()}! Pesan kamu berhasil terkirim.`;
      formStatus.classList.add("success");
      contactForm.reset();
    } else {
      formStatus.textContent = "Mohon periksa kembali data yang kamu isi.";
      formStatus.classList.add("error");
    }
  });
}
