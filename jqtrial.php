<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>This demo illustrates the basic functionality of the Grid plugin. The jQWidgets Grid plugin offers rich support for interacting with data, including paging, grouping and sorting. 
    </title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.sort.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.pager.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.edit.js"></script> 
    <script type="text/javascript" src="../../scripts/demos.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var url = "database/vendordetail.xml";
            // prepare the data
            var source =
            {
                datatype: "xml",
                datafields: [
                    { name: 'firstname', type: 'string' },
                    { name: 'lastname', type: 'string' },
                    { name: 'vendorcno', type: 'string' }
                ],
                root: "Products",
                record: "Product",
                id: 'vendorid',
                url: url
            };
            var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
                if (value < 20) {
                    return '<span style="margin: 4px; float: ' + columnproperties.cellsalign + '; color: #ff0000;">' + value + '</span>';
                }
                else {
                    return '<span style="margin: 4px; float: ' + columnproperties.cellsalign + '; color: #008000;">' + value + '</span>';
                }
            }
            var dataAdapter = new $.jqx.dataAdapter(source, {
                downloadComplete: function (data, status, xhr) { },
                loadComplete: function (data) { },
                loadError: function (xhr, status, error) { }
            });
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 850,
                source: dataAdapter,                
                pageable: true,
                autoheight: true,
                sortable: true,
                altrows: true,
                enabletooltips: true,
                editable: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
                  { text: 'Product Name', columngroup: 'ProductDetails', datafield: 'ProductName', width: 250 },
                  { text: 'Quantity per Unit', columngroup: 'ProductDetails', datafield: 'QuantityPerUnit', cellsalign: 'right', align: 'right', width: 200 },
                  { text: 'Unit Price', columngroup: 'ProductDetails', datafield: 'UnitPrice', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: 200 },
                  { text: 'Units In Stock', datafield: 'UnitsInStock', cellsalign: 'right', cellsrenderer: cellsrenderer, width: 100 },
                  { text: 'Discontinued', columntype: 'checkbox', datafield: 'Discontinued' }
                ],
                columngroups: [
                    { text: 'Product Details', align: 'center', name: 'ProductDetails' }
                ]
            });
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div id="jqxgrid">
        </div>
     </div>
</body>
</html>