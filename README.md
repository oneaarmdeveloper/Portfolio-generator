# Dynamic Portfolio 

# Dynamic Portfolio Website

A sleek, responsive, and category-filterable portfolio website built with **PHP** and **CSS**, designed to showcase your projects dynamically from a JSON data file.

---

##  Features

- **Dynamic Project Loading**: Projects are loaded from a `projects.json` file—no hardcoded HTML!
- **Category Filtering**: Filter projects by category using a dropdown menu (with instant form submission).
- **Fully Responsive**: Looks great on mobile, tablet, and desktop.
- **Modern UI**: Clean design with hover effects, smooth transitions, and a professional color scheme.
- **Secure Output**: Uses `htmlspecialchars()` to prevent XSS vulnerabilities.
- **Easy to Customize**: Just edit the JSON file to add, remove, or update projects—no PHP knowledge needed!

---

##  Project Structure

```
/portfolio
│
├── index.php              # Main PHP file that renders the portfolio
├── projects.json          # JSON file containing your project data
└── style.css              # Styling for the entire site
```

### Example `projects.json` format:
```json
[
  {
    "title": "E-Commerce Website",
    "description": "A full-stack online store built with React and Node.js.",
    "category": "Web Development",
    "image": "images/ecommerce.jpg"
  },
  {
    "title": "Cybersecurity Dashboard",
    "description": "Real-time threat monitoring tool for network admins.",
    "category": "Cybersecurity",
    "image": "images/security-dash.png"
  }
]
```

>  **Tip**: Ensure all image paths are correct relative to your web root!

---

##  How to Use

1. **Clone or download** this project.
2. **Create/edit** your `projects.json` file with your own projects.
3. **Upload** to a PHP-enabled web server (e.g., Apache with PHP support).
4. Visit `index.php` in your browser—your portfolio is live! 🎉

>  Works locally with tools like XAMPP, MAMP, or PHP’s built-in server:
> ```bash
> php -S localhost:8000
> ```

---

##  Design Highlights

- **Color Palette**: Deep navy (`#1A2238`) + teal (`#38BEC9`) + soft gray background (`#E9EEF2`)
- **Card Hover Effects**: Subtle lift and shadow for interactivity
- **Mobile-First Grid**: Projects stack vertically on small screens
- **Accessible Forms**: Clear labels and semantic HTML

---

##  Security Note

This implementation safely escapes all user-facing output using `htmlspecialchars()`, protecting against basic XSS attacks when rendering dynamic content from JSON.

---

##  Perfect For

- Developers building a personal portfolio  
- Students showcasing class projects  
- Cybersecurity professionals (like you!) highlighting security tools or research  
- Anyone who wants a clean, maintainable, and dynamic project gallery

---

---

 **Pro Tip**: Pair this with a CI/CD pipeline or a simple admin panel later to edit `projects.json` via a web form!
