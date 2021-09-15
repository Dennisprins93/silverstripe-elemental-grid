import Injector from 'lib/Injector';
import ColumnSizing from '../components/ColumnSizing';

export default () => {
  Injector.transform('elemental-column-sizing', (updater) => {
    updater.component('Element', ColumnSizing);
  });

};
