<?php

include("includes/fusioncharts.php");

$columnChart = new FusionCharts("mscombi2d", "ex1", "100%", 400, "chart-1", "json", "
{
  "chart": {
    "caption": "Expense Analysis",
    "subcaption": "ACME Inc.",
    "xaxisname": "Region",
    "yaxisname": "Amount (In USD)",
    "numberprefix": "$",
    "exportenabled": "1",
    "theme": "fusion"
  },
  "categories": [
    {
      "category": [
        {
          "label": "East"
        },
        {
          "label": "West"
        },
        {
          "label": "South"
        },
        {
          "label": "North"
        }
      ]
    }
  ],
  "dataset": [
    {
      "seriesname": "Actual Expenses",
      "data": [
        {
          "value": "1441290"
        },
        {
          "value": "855912"
        },
        {
          "value": "911404"
        },
        {
          "value": "648136"
        }
      ]
    },
    {
      "seriesname": "Budgeted Expenses",
      "renderas": "line",
      "data": [
        {
          "value": "1297430"
        },
        {
          "value": "776485"
        },
        {
          "value": "685352"
        },
        {
          "value": "726791"
        }
      ]
    },
    {
      "seriesname": "Unknown liabilities",
      "renderas": "area",
      "showanchors": "0",
      "data": [
        {
          "value": "143860"
        },
        {
          "value": "79427"
        },
        {
          "value": "226052"
        },
        {
          "value": "78655"
        }
      ]
    }
  ]
}");

$columnChart->render();

?>