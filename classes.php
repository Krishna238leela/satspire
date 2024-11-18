
<!doctype html>
<html class="no-js" lang="en">

<head>
 <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <meta name="description" content="Join Satspire to excel in your studies with expert tutors and flexible learning options across subjects like Mathematics, Science, and more.">
    <meta name="keywords" content="SATSPIRE, Mathematics, Algebra, Expert Tuitors, Comprehensive Material, Personalized Guidance, Affordable Pricing, Geometry, Statistics.">
   
    <meta name="author" content="SATSPIRE">
  
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://satspire.openpixeldev.com/">
    <meta property="og:title" content="Satspire - Empowering Students with Quality Education in Mathematics, Science, and More">
    <meta property="og:description" content="Satspire offers personalized and innovative education across subjects like Mathematics, Science, English, and more. Join us to excel in your studies with expert tutors, comprehensive courses, and flexible learning options.">
    <meta property="og:image" content="https://satspire.openpixeldev.com//images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://satspire.openpixeldev.com/">
    <meta property="twitter:title" content="Satspire - Empowering Students with Quality Education in Mathematics, Science, and More">
    <meta property="twitter:description" content="Satspire offers personalized and innovative education across subjects like Mathematics, Science, English, and more. Join us to excel in your studies with expert tutors, comprehensive courses, and flexible learning options.">

<?php include("includes/links.php"); ?>

	 <title>SATSPIRE - classes</title>
    
</head>

<body>
    
    <!--====== Header Start ======-->

    <?php include("includes/header.php"); ?>

    <!--====== Header Ends ======-->
    
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(/images/classes-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Classes</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->
    <section class="class-calendr">
    <div class="container">
        <h1>Classes Scheduler </h1>
        <div class="controls">
            <button id="prev-week-btn">&#9664; Prev</button>
            <span id="month-year-display"></span>
            <button id="next-week-btn">Next &#9654;</button>
        </div>
        <table id="calendar">
            <thead>
                <tr id="days-row">
                    <th>Time</th>
                    <!-- Days of the week will be generated here -->
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Time rows will be generated dynamically -->
            </tbody>
        </table>
    </div>

    <!-- Modal for adding/editing an event -->
    <div id="event-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Manage Event</h3>
            <input type="text" id="event-name" placeholder="Event Name">
            <div class="modal-buttons">
                <button id="save-event-btn">Save Event</button>
                <button id="delete-event-btn" class="delete-btn">Delete Event</button>
            </div>
        </div>
    </div>
    </section>

    <script src="script.js"></script>


    <!--====== Contact Ends ======-->
    
    <!--====== Newsletter Start ======-->

    

    <!--====== Newsletter Ends ======-->
    
    <!--====== Footer Start ======-->
<?php include("includes/footer.php"); ?>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== Start ======-->



    <!--====== Ends ======-->

<?php include("includes/script.php"); ?>


    <!--====== Jquery js ======-->
 
    
    
</body>

</html>



<style>
 

.controls {
    margin: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

button {
    padding: 10px 20px;
    background-color: #862f8a;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #2e3386;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
    font-size: 16px;
    border-radius: 5px;
}

th {
    background-color: #2e3386;
    color: #fff;
    font-weight: bold;
}

td {
    background-color: #ffffff;
}

tr:nth-child(even) td {
    background-color: #f4f4f4;
}

td:hover {
    background-color: #e9ecef;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #ffffff;
    margin: 10% auto;
    padding: 30px;
    border-radius: 12px;
    width: 400px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.4);
}

.close {
    color: #862f8a;
    float: right;
    font-size: 32px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #2e3386;
    text-decoration: none;
    cursor: pointer;
}

.modal-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

input[type="text"], input[type="time"], input[type="date"] {
    width: calc(100% - 24px);
    padding: 12px;
    margin-top: 10px;
    border: 2px solid #862f8a;
    border-radius: 6px;
}
</style>

<script>
  const calendarBody = document.getElementById("calendar-body");
const daysRow = document.getElementById("days-row");
const monthYearDisplay = document.getElementById("month-year-display");
const prevWeekBtn = document.getElementById("prev-week-btn");
const nextWeekBtn = document.getElementById("next-week-btn");
const modal = document.getElementById("event-modal");
const closeModal = document.querySelector(".close");
const saveEventBtn = document.getElementById("save-event-btn");
const deleteEventBtn = document.getElementById("delete-event-btn");
const eventNameInput = document.getElementById("event-name");

let selectedCell = null;
let currentStartDate = new Date(); // Start date of the displayed week

// Set current start date to the beginning of the week (Sunday)
currentStartDate.setDate(currentStartDate.getDate() - currentStartDate.getDay());

// Render the calendar with a 7-day range
function renderCalendar(startDate) {
    // Clear previous calendar
    calendarBody.innerHTML = "";
    daysRow.innerHTML = "<th>Time</th>";

    const daysToShow = 7; // Show 7 days
    const hours = 24; // 24-hour format (0-23)
    const dates = [];

    // Generate days of the week
    for (let i = 0; i < daysToShow; i++) {
        const date = new Date(startDate);
        date.setDate(startDate.getDate() + i);
        dates.push(date);
        const dayCell = document.createElement("th");
        dayCell.textContent = date.toLocaleString('default', { weekday: 'short', day: 'numeric' });
        daysRow.appendChild(dayCell);
    }

    // Display the month and year range
    const startMonth = dates[0].toLocaleString('default', { month: 'long' });
    const startYear = dates[0].getFullYear();
    const endMonth = dates[6].toLocaleString('default', { month: 'long' });
    const endYear = dates[6].getFullYear();
    monthYearDisplay.textContent = startYear === endYear ? `${startMonth} - ${endMonth} ${startYear}` : `${startMonth} ${startYear} - ${endMonth} ${endYear}`;

    // Create time slots
    for (let hour = 0; hour < hours; hour++) {
        const row = document.createElement("tr");
        const timeCell = document.createElement("td");
        timeCell.textContent = `${hour.toString().padStart(2, '0')}:00`;
        row.appendChild(timeCell);

        // Create cells for each day
        for (let i = 0; i < daysToShow; i++) {
            const cell = document.createElement("td");
            cell.dataset.dateTime = `${dates[i].toISOString().split('T')[0]} ${hour.toString().padStart(2, '0')}:00`;
            cell.addEventListener("click", () => openModal(cell));
            row.appendChild(cell);
        }

        calendarBody.appendChild(row);
    }
}

// Open modal to add or edit event
function openModal(cell) {
    selectedCell = cell;
    eventNameInput.value = selectedCell.textContent || "";
    modal.style.display = "block";
}

// Close modal
closeModal.onclick = function () {
    closeEventModal();
};

// Save event
saveEventBtn.onclick = function () {
    const eventName = eventNameInput.value.trim();
    if (eventName) {
        selectedCell.textContent = eventName;
        closeEventModal();
    } else {
        alert("Please enter an event name.");
    }
};

// Delete event
deleteEventBtn.onclick = function () {
    if (selectedCell) {
        selectedCell.textContent = "";
        closeEventModal();
    }
};

// Close the event modal
function closeEventModal() {
    modal.style.display = "none";
    eventNameInput.value = "";
    selectedCell = null;
}

// Close modal when clicking outside of it
window.onclick = function (event) {
    if (event.target === modal) {
        closeEventModal();
    }
};

// Navigation buttons to change weeks
prevWeekBtn.onclick = function () {
    currentStartDate.setDate(currentStartDate.getDate() - 7);
    renderCalendar(currentStartDate);
};

nextWeekBtn.onclick = function () {
    currentStartDate.setDate(currentStartDate.getDate() + 7);
    renderCalendar(currentStartDate);
};

// Render the initial week calendar on page load
renderCalendar(currentStartDate);
</script>