<!DOCTYPE HTML>
<html>
<head>
    <meta charset="uft-8" />
    <title>Title</title>
</head>
<body>
    <p>
        <?php
            define('TAX_RATES',
                array(
                    'Single' => array( 
                        'Rates' => array(10,15,25,28,33,39.6),
                        'Ranges' => array(0,9275,37650,91150,190150,413350,415050),
                        'MinTax' => array(0,927.50,5183.75,18558.75,46278.75,119934.75,120529.75)
                    ),
                    'Married_Jointly' => array( 
                        'Rates' => array(10,15,25,28,33,39.6),
                        'Ranges' => array(0,18550,75300,151900,231450,413350,466950),
                        'MinTax' => array(0,1855.00,10367.50,29517.50,51791.50,111818.50,130578.50)
                    ),
                    'Married_Separately' => array( 
                        'Rates' => array(10,15,25,28,33,39.6),
                        'Ranges' => array(0,9275,37650,75950,115725,206675,233475),
                        'MinTax' => array(0,927.50,5183.75,14758.75,25895.75,55909.25,65289.25)
                    ),
                    'Head_Household' => array( 
                        'Rates' => array(10,15,25,28,33,39.6),
                        'Ranges' => array(0,13250,50400,130150,210800,413350,441000),
                        'MinTax' => array(0,1325.00,6897.50,26835.00,49417,116258.50,125936)
                    )
                )
            );

            foreach($TAX_RATES as $status => $bracket)
                echo "$status</br>";

                $lower = $bracket['Ranges'];
                $upper = $bracket['Ranges'];

                echo '<table>
                    <tr>
                        <th>Taxable Income</th>
                        <th>Tax Rate</th>
                    </tr>';
                echo '<tr>
                        <td>', $lower, ' - ', $upper, '</td>
                        <td>', $bracket['Rates'], '%</td>
                    </tr>';
                for($count = 1, $count <= 5, $count++)
                    $lower = $upper;
                    $upper = $bracket['Ranges'];

                    echo '<tr>
                            <td>', $lower, ' - ', $upper, '</td>
                            <td>$', $bracket['MinTax'], '</td>
                        </tr>';
                
                echo '</table>';
        ?>
    </p>
</body>
</html>