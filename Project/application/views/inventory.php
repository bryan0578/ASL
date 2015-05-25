<h2>Items in Inventory</h2>
<div class="table-responsive">
<?php
$tmpl = array (
                    'table_open'          => '<table class="table table-hover">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

$this->table->set_template($tmpl);
$this->table->set_heading('Name', 'Price', 'Sale Price', 'Stock', 'Actions');
echo $this->table->generate($inventory);
?>
</div>


