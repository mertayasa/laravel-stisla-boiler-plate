require('./bootstrap');
require('./stisla/stisla-scripts');
require('./stisla/stisla-custom');
// require('./datatables/datatables');

import Swal from 'sweetalert2';
import Chart from 'chart.js/auto';
import toastr from 'toastr';
window.Swal = Swal;
window.Chart = Chart;
window.toastr = toastr;
