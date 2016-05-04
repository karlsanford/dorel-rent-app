// JavaScript source code
function setApplicationDateField() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;//January is 0!
    var yyyy = today.getFullYear();
    var dateStr = (mm + '/' + dd + '/' + yyyy);
    if (dd < 10) { dd = '0' + dd; }
    if (mm < 10) { mm = '0' + mm; }
    //document.forms["frmApplyOnline"].rmwebsvc_applicationdate.value = dateStr;
    document.getElementById('rmwebsvc_applicationdate').value = dateStr;
}

function getQueryStringParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function setValueSelectField(paramName, elementId) {
    var val = getQueryStringParameterByName(paramName);
    document.getElementById(elementId).value = val;
}

setValueSelectField('location', 'rmwebsvc_pudf_Interested_Property');
setApplicationDateField();