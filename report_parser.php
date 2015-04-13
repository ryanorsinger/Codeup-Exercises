<?php

/* Output should be ordered by units in descending order
 * File output should show:
 * Office | Date | Report Name
 * Total Sales | Number of Employees | Avg Sale per Employee
 * Column headers should appear in the following format
 * Units   |     Full Name       |   Employee Number
 * 5             Bob Boberson        2
 */

/*
 * Reads the contents of a txt file to a string.
 */
function readLines($filename) {
    $handle = fopen($filename, 'r');
    $contentsString = fread($handle, filesize($filename));
    fclose($handle);
    return $contentsString;
}

/*
 * Removes ==== and ***** formatting lines from the array.
 */
function removeKruft($array) {
    foreach($array as $key => $row) {
        $trimmedRow = trim($row, "* =");

        if(empty($trimmedRow)) {
            unset($array[$key]);
        }
    }
    return $array;
}

function formatEmployee($arrayOfAnEmployee) {

    $employeeNumber = array_shift($arrayOfAnEmployee);
    $sales = array_pop($arrayOfAnEmployee);
    $fullName = implode(' ', $arrayOfAnEmployee);
    $employee = [
        'sales' => $sales,
        'name' => $fullName,
        'employee_number' => $employeeNumber
        ];
    return $employee;
}

function formatArray($rows) {
    foreach($rows as $row) {
        $array = explode(', ', $row);
        $employees[] = formatEmployee($array);
    }
    return $employees;
}

function getPaddedString($piece1, $piece2, $piece3) {
    $line = str_pad($piece1, 28) . str_pad($piece2, 50) . str_pad($piece3, 10) . PHP_EOL;
    return $line;
}

$contentsString = readLines('report.txt');

$rows = explode("\n", $contentsString);

$reportName = array_shift($rows);
$reportDate = array_shift($rows);
$officeName = array_shift($rows);

$rows = removeKruft($rows);

// Remove the existing column header names from the output
array_shift($rows);

$employeesArray = formatArray($rows);
print_r($employeesArray);

$arrayOfSales = array_column($employeesArray, 'sales');
$arrayOfNames = array_column($employeesArray, 'name');
$arrayOfEmployeeNumbers = array_column($employeesArray, 'employee_number');

arsort($arrayOfSales);

$orderOfEmployeeSalesRankings = array_keys($arrayOfSales);

$totalSales = array_sum($arrayOfSales);

foreach($orderOfEmployeeSalesRankings as $order) {
    $employeesOrderedByProduction[] = getPaddedString($arrayOfSales[$order], $arrayOfNames[$order], $arrayOfEmployeeNumbers[$order]);
}

$numberOfEmployees = count($employeesOrderedByProduction);
$avgSalesPerEmployee = $totalSales / $numberOfEmployees;

// echo getPaddedString($reportName, $officeName, $reportDate);

// echo getPaddedString("Total Units: " . $totalSales, "Number of Employees: $numberOfEmployees", "Average Units per employee: " . floor($avgSalesPerEmployee));

// foreach($employeesOrderedByProduction as $employee) {
//     echo ' ' . $employee ;
// }
