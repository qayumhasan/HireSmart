<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resume Viewer</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #f4f6f8;
      padding: 0;
    }

    .resume-container {
      max-width: 900px;
      margin: 50px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .resume-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .resume-header h1 {
      margin: 0;
      font-size: 28px;
    }

    .resume-header p {
      color: #666;
      font-size: 16px;
      margin-top: 5px;
    }

    .section {
      margin-top: 30px;
    }

    .section h2 {
      font-size: 20px;
      color: #333;
      border-bottom: 1px solid #ddd;
      padding-bottom: 6px;
      margin-bottom: 15px;
    }

    .section p,
    .section li {
      color: #555;
      line-height: 1.6;
    }

    .skills {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .skill-badge {
      background-color: #e1ecf4;
      color: #0366d6;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 14px;
    }

    .download-btn {
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      border-radius: 6px;
      margin-top: 30px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .download-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="resume-container">
    <div class="resume-header">
      <h1>Qayum Hasan</h1>
      <p>Email: qayum@example.com | Phone: +880-1234-567890</p>
    </div>

    <div class="section">
      <h2>Professional Summary</h2>
      <p>
        Motivated frontend developer with 3+ years of experience building responsive web applications using HTML, CSS, JavaScript, and Vue.js. Strong knowledge of UX/UI principles and modern web standards.
      </p>
    </div>

    <div class="section">
      <h2>Work Experience</h2>
      <ul>
        <li><strong>Frontend Developer</strong> — TechCorp Ltd. (2022–Present)</li>
        <li><strong>Web Designer</strong> — WebHive Agency (2020–2022)</li>
      </ul>
    </div>

    <div class="section">
      <h2>Education</h2>
      <ul>
        <li><strong>BSc in Computer Science</strong> — Dhaka University, 2016–2020</li>
      </ul>
    </div>

    <div class="section">
      <h2>Skills</h2>
      <div class="skills">
        <div class="skill-badge">HTML</div>
        <div class="skill-badge">CSS</div>
        <div class="skill-badge">JavaScript</div>
        <div class="skill-badge">Vue.js</div>
        <div class="skill-badge">Git</div>
        <div class="skill-badge">Responsive Design</div>
      </div>
    </div>

    <div class="section">
      <h2>Cover Letter</h2>
      <p>
        I am excited to apply for the frontend developer role at your company. I bring a blend of design and development expertise and a passion for clean code and elegant solutions. I am confident that I can contribute effectively to your team.
      </p>
    </div>

    <a href="qayum_resume.pdf" class="download-btn" download>Download Resume PDF</a>
  </div>
</body>
</html>
