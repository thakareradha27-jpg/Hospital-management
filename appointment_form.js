document.getElementById("appointmentForm").addEventListener("submit", function(e) {
  
  let patient = document.querySelector("input[name='patient_name']").value.trim();
  let doctor = document.querySelector("input[name='doctor_name']").value.trim();

  if (patient === "" || doctor === "") {
      alert("Please fill all fields properly!");
      e.preventDefault();
  }
});
