import HijriDatetimePickerFormComponent from './components/hijri-date-time-picker';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(HijriDatetimePickerFormComponent);
});
