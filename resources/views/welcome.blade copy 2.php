<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Job Apply Form</title>
  <style>

    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #444;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      height: 120px;
    }

    .submit-btn {
      width: 100%;
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 14px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Apply for This Job</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
      
      <div class="form-group">
        <label for="name">Full Name *</label>
        <input type="text" id="name" name="name" required />
      </div>

      <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number *</label>
        <input type="tel" id="phone" name="phone" required />
      </div>

      <div class="form-group">
        <label for="resume">Upload Resume (PDF/DOC) *</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required />
      </div>

      <div class="form-group">
        <label for="cover">Cover Letter</label>
        <textarea id="cover" name="cover" placeholder="Write your message or cover letter..."></textarea>
      </div>

      <button type="submit" class="submit-btn">Submit Application</button>
    </form>
  </div>
</body>
</html>
