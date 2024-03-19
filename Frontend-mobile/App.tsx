import { StatusBar } from 'expo-status-bar';
import { View } from 'react-native';
import { Form } from './components/Form';

const App = () => {
  return (
    <View>
      <Form />
      <StatusBar style="auto" />
    </View>
  );
};

export default App;
