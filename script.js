console.log("Website loaded successfully.");

function showSection(sectionId) {
  // Hide all info sections
  const sections = document.querySelectorAll('.info-section');
  sections.forEach(sec => sec.style.display = 'none');

  // Hide welcome message
  const welcome = document.getElementById('welcome');
  if (welcome) welcome.style.display = 'none';

  // Show selected section
  const target = document.getElementById(sectionId);
  if (target) {
    target.style.display = 'block';
  } else {
    console.error("Section not found:", sectionId);
  }
}