
<html>
    <body>
        <h2 style = "background-color: beige;
height: 75;
font-size: 53;
margin-bottom: 56;
margin-top: 35;">Calendar</h2>
    <select id="year" style = "height: 48;
font-size: 31;
font-family: harrington;
background-color: seashell;
border-radius: 13;">
        <?php for($i = 1980; $i <= 2020; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
    </select>

    <select id="month" style = "height: 48;
font-size: 31;
font-family: harrington;
background-color: seashell;
border-radius: 13;">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>

    <select id="day" style = "height: 48;
font-size: 31;
font-family: harrington;
background-color: seashell;
border-radius: 13;">       
        <?php for($i = 1; $i <= 31; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>


        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="ajax.js"></script>

    </body>
</html>
