



/* eslint-disable */
import jQuery from 'jquery';
import $ from 'jquery';
import moment from 'moment-hijri';
import plugin from './../../jquery.calendars.package/js/jquery.plugin.js';
import calendars from './../../jquery.calendars.package/js/jquery.calendars.js';
import calendarsPlus from './../../jquery.calendars.package/js/jquery.calendars.plus.js';
import ummalqura from './../../jquery.calendars.package/js/jquery.calendars.ummalqura.js';
import julian from './../../jquery.calendars.package/js/jquery.calendars.julian.js';

function convertDate(from, to, y, m, d) {

    if (isNaN(y) || isNaN(m) || isNaN(d)) {
        return [y, m, d];
    }

    var jd = $.calendars.instance(from).toJD(y, m, d);

    var date = $.calendars.instance(to).fromJD(jd);

    return [
        date.year(),
        date.month(),
        date.day()
    ]
}

function ummalquraToJulian(date) {
    let [y, m, d] = date;
    return convertDate('ummalqura', 'julian', y, m, d);
}

function gregorianToJulian(date) {
    let [y, m, d] = date;
    return convertDate('gregorian', 'julian', y, m, d);
}

function julianToUmmalqura(date) {
    let [y, m, d] = date;
    return convertDate('julian', 'ummalqura', y, m, d);
}

function julianToGregorianTo(date) {
    let [y, m, d] = date;
    return convertDate('julian', 'gregorian', y, m, d);
}

export default {
    J: (y, m, d) => julianToUmmalqura(gregorianToJulian([y, m, d])),
    G: (y, m, d) => julianToGregorianTo(ummalquraToJulian([y, m, d])),
};
