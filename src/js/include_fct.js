$(function () {
  var includes = $('[data-include]')
  $.each(includes, function () {
    var file = 'src/views/' + $(this).data('include') + '.html'
    $(this).load(file)
  })
})
