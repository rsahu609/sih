const object = {
  activity: [
    {
      title: 'Water conservation at Durg',
      description: 'This amazing water conservation method employed at Durg',
      time: 23235235,
      city: 'Durg',
      image: 'uploads/1.jpg'
    }, {
      title: 'Water conservation at Bhilai',
      description: 'This amazing water conservation method employed at Durg',
      time: 23235235,
      city: 'Bhilai',
      image: 'uploads/2.jpg'
    }, {
      title: 'Water conservation at Raipur',
      description: 'This amazing water conservation method employed at Durg',
      time: 23235235,
      city: 'Raipur',
      image: 'uploads/3.jpg'
    },
  ]
};

const source = $('#entry-template').html();
const template = Handlebars.compile(source);
$.ajax('api/activity.php').done(function(response) {
  console.log(response);
  const html = template(response);
  $('#feed-container').append(html);
});
