const App = new Vue(
    {
      el: '#app',
      data: {

        //array vuoto
        cards: []
      },
      created() {

        //chiamata axios sul link del mio controller
        axios.get('http://localhost/php-ajax-dischi/server/controller-api.php').then((result) => {
          this.cards = result.data;
        }).catch((error) => { console.log(error); });
      }
    }
  );