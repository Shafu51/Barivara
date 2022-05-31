
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="header">
        <?php
            include('config/config.php');
            
            $sql1="SELECT DISTINCT house_type FROM add_property";
            $query=mysqli_query($db,$sql1);

            $houseTypes = [];
            if(mysqli_num_rows($query)>0)
            {
                while($row = mysqli_fetch_assoc($query))
                {
                    $houseTypes[] = $row['house_type'];
                }
            }     
        ?>
            <style>
                .select_input_field {
                    width: auto;
                    padding: 16px;
                    border: none;
                    outline: none;
                    border-radius: 5px;
                }
                .submit-btn{
                    padding: 16px;
                    width: auto;
                    border: none;
                    border-radius: 5px;
                    background-color: black;
                    color: white;
                }
                .flex {
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                }
                .flex > div {
                    padding: 4px 8px;
                }
                
                .flex-item {
                    width: auto;
                }
                .w-50 {
                    width: 50%;
                }
                .w-100 {
                    width: 100%;
                }
                .my-3 {
                    margin-top: 8px;
                    margin-bottom: 8px;
                }
                .p-3 {
                    padding: 8px;
                }
                .mr-2 {
                    margin-right: 4px;
                }
                .ml-2 {
                    margin-left: 4px;
                }
                .pr-2 {
                    padding-right: 4px;
                }
                .pl-2 {
                    padding-left: 4px;
                }

                @media (max-width: 800px) {
                    .flex {
                        flex-direction: column;
                    }
                }
            </style>
        <form method="GET" action="search-property.php">
            
            <h1 style='font-size: 50px;'>Search House</h1>
            
            <div class="form-box flex">
                <div class="w-100 flex">
                    <div class="w-50">
                        <input class="w-100 search_field" type="text" placeholder="Enter your location" name="search_property" aria-label="Search" required>
                    </div>
                    <div class="w-50">
                        <select class="w-100 select_input_field" name="house_type">
                            <option value="">Choose house type</option>
                            <?php
                                foreach ($houseTypes as $key => $item) {
                                    echo '<option value="'.$item.'">'.$item.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="w-100 flex">
                    <div class="w-50">
                        <input class="w-100 search_field" type="number" min="0" placeholder="Min Price" name="min">
                    </div>
                    <div class="w-50">
                        <input class="w-100 search_field" type="number" min="0" placeholder="Max Price" name="max">
                    </div>
                </div>

                <div class="w-100" style="padding: 8px 14px">
                    <button class="w-100 submit-btn" type="submit">Search</button>
                </div>
            </div>
      </form>
    </div>
</body>
</html>