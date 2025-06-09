<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odisha Tourist Destinations</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8ff;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 20px;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            background-color: #4caf50;
            padding: 15px;
            margin: 0;
            font-size: 1.8em;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .search-container {
            padding: 10px;
            text-align: center;
        }
        .search-container input {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .table-container {
            flex: 1;
            overflow-y: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead {
            position: sticky;
            top: 0;
            background-color: #4caf50;
            color: #fff;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4caf50;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <section>
        <h2>Tourist Destinations in Odisha</h2>
        <div class="search-container">
            <input type="text" id="search" placeholder="Search for places...">
            <button type="button" class="btn btn-warning rounded-pill py-2 px-4" onclick="filterTable()" style="margin-top: 7px;">Search</button>
        </div>
        <div class="table-container">
            <table id="destinationTable">
                <thead>
                    <tr>
                        <th>Place</th>
                        <th>Tourist Attractions</th>
                        <th>Days</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Khorda</td>
                        <td>Lingaraj Temple, Dhauli Hills, Udayagiri & Khandagiri</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Cuttack</td>
                        <td>Barabati Fort, Chandi Mandir</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Puri</td>
                        <td>Jagannath Temple, Puri Beach, Chilika Lake, Swargadwar</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Bhubaneswar</td>
                        <td>Lingaraj Temple, Udayagiri and Khandagiri Caves, Rajarani Temple</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Sundargarh</td>
                        <td>Khandadhar Waterfall, Hanuman Vatika, Ghogar Temple, Vedvyas</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Kendrapara</td>
                        <td>Bhitarkanika National Park, Gahirmatha Beach and Marine Sanctuary, Batighar</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Balasore</td>
                        <td>Chandipur Beach, Panchalingeshwar Temple, Khirachora Gopinath Temple</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Sambalpur</td>
                        <td>Nilagiri Palace, Chandaneswar Temple, Bhitarkanika Mangroves, Emami Jagannath Temple</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Ganjam</td>
                        <td>Gopalpur Beach, Taratarini Temple, Mahurikalua Temple</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Koraput</td>
                        <td>Gupteshwar Cave Temple</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                    <tr>
                        <td>Mayurbhanj</td>
                        <td>--</td>
                        <td>Monday to Friday <br> Sat & Sun (might be crowded during festive season)</td>
                        <td>09:00 am to 05:00 pm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script>
        function filterTable() {
            const input = document.getElementById('search');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('destinationTable');
            const trs = table.getElementsByTagName('tr');

            for (let i = 1; i < trs.length; i++) {
                const tds = trs[i].getElementsByTagName('td');
                let found = false;

                for (let j = 0; j < tds.length; j++) {
                    if (tds[j]) {
                        const txtValue = tds[j].textContent || tds[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
                
                trs[i].style.display = found ? '' : 'none';
            }
        }
    </script>
</body>
</html>
