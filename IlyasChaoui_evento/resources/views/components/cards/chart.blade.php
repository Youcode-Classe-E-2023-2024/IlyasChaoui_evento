 <div class="w-full h-48 pt-8 mb-20 mt-10 lg:mb-0 lg:flex-none">
     <div
         class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border">
         <div class="flex-auto p-4">
             <canvas id="reservationChart" class="w-full h-full" height="150"></canvas>
         </div>
     </div>
 </div>

 <script>
     const dates = @json($eventStatistics->pluck('date'));
     const counts = @json($eventStatistics->pluck('event_count'));

     console.log(dates);
     const ctx = document.getElementById('reservationChart').getContext('2d');
     const eventChart = new Chart(ctx, {
         type: 'bar',
         data: {
             labels: dates,
             datasets: [{
                 label: 'Nombre d\'evenements ajoutés',
                 data: counts,
                 backgroundColor: 'rgba(linear-gradient(to right, #8B5CF6, #FF7A67))',
                 borderColor: 'rgba(233, 83, 148, 1)',
                 borderWidth: 1
             }]
         },
         options: {
             scales: {
                 x: {
                     title: {
                         display: true,
                         text: 'Date'
                     }
                 },
                 y: {
                     beginAtZero: true,
                     title: {
                         display: true,
                         text: 'Nombre d\'evenements'
                     }
                 }
             }
         }
     });
 </script>
