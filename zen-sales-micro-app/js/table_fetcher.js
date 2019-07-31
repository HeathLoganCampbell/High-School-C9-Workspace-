var url = 'https://new-bucket-ad148675.s3.amazonaws.com/inv.json';

const items = [];

var outOfStockTable = new Vue(
{
  el: '#out-of-stock-table',
  data: 
  {
    items: items,
    fields:
    {
      ItemName:     { label: 'Item Name', sortable: true },
      OutOfStock:  { label: 'Last Shippment', sortable: true }
    },
    currentPage: 1,
    perPage: 10,
    totalRows: items.length,
    pageOptions: [
                    {text:5,value:5},
                    {text:10,value:10},
                    {text:15,value:15}
                 ],
    sortBy: "ItemName",
    sortDesc: false,
    filter: null,
    modalDetails: { index:'', data:'' }
  },
   methods: 
   {
        details(item, index, button)
        {
            this.modalDetails.data = JSON.stringify(item, null, 2);
            this.modalDetails.index = index;
            this.$root.$emit('show::modal','modal1', button);
        },
        resetModal() 
        {
            this.modalDetails.data = '';
            this.modalDetails.index = '';
        },
        onFiltered(filteredItems)
        {
            // Trigger pagination to update the number of buttons/pages due to filtering
            this.totalRows = filteredItems.length;
            this.currentPage = 1;
        }
    }
})
