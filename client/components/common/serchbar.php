<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Basic styling for the search bar */
        .searchbar {
            display: flex;
            align-items: center;
            background-color: white;
            border: solid 2px #6A0DAD;
            border-radius: 100px;
            max-width: 500px;
            height: 40px; /* Adjusted height for better alignment */
            padding: 0 10px; /* Added padding for inner spacing */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Optional shadow for better visibility */
        }

        .searchbar input.search {
            border: none;
            outline: none;
            flex-grow: 1; /* Makes the input take up remaining space */
            font-size: 14px;
            padding: 0 10px;
        }

        .searchbar .search-icon {
            font-size: 20px;
            color: #6A0DAD;
            margin-left: 10px;
        }

        .searchbar h3 {
            font-size: 13px;
            color: white;
            padding: 5px 10px; /* Adjusted padding for better fit */
            background-color: #6A0DAD;
            border-radius: 50%;
            margin-left: 10px; /* Spacing between icon and h3 */
        }
    </style>
</head>
<body>
    <div class="searchbar">
        <input class="search" type="text" placeholder="Search..."> 
        <i class="fas fa-search search-icon"></i>
        <h3 class="A">A</h3>
    </div>
</body>
    <script src="../../assets/jsFIles/salon/SearchService.js"></script>
</html>
