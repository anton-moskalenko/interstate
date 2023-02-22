Interstate.Points = {};

Interstate.Points.Collection = function ()
{
    API.request('Interstate.Points.Collection', {
        'dt': $('#current-date').val()
    }, function (data) {
        $('#page').html(data.render);
    }, function () {

    });
};

Interstate.Points.create = function ()
{
    if(!confirm('Are you sure?'))
    {
        return;
    }

    API.request('Interstate.Points.Create', {
        'debug': true
    }, function (data) {
        Interstate.Points.Collection();
    }, function () {

    });
};

Interstate.Points.remove = function (key)
{
    if(!confirm('Are you sure?'))
    {
        return;
    }

    API.request('Interstate.Points.Remove', {
        'key': key
    }, function (data) {
        Interstate.Points.Collection($('#current-date').val());
    }, function () {

    });
};

Interstate.Points.edit = function (key)
{
    API.request('Interstate.Points.Edit', {
        'key': key
    }, function (data) {
        $('#page').html(data.render);
    }, function () {

    });
};

Interstate.Points.save = function (key)
{
    if(!confirm('Are you sure?'))
    {
        return;
    }
    
    const jq_block = $('#Points-edit');
    API.request('Interstate.Points.Save', {
        'key': key,
        'title': jq_block.find('[name="title"]').val(),
        'start': jq_block.find('[name="start"]').val(),
        'finish': jq_block.find('[name="finish"]').val(),
        'status': jq_block.find('[name="status"]').val(),
        'type': jq_block.find('[name="type"]').val(),
        'data': '{}'
    }, function (data) {
        Interstate.Points.Collection($('#current-date').val());
    }, function () {

    });
};