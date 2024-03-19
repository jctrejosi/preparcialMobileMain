import React from 'react';
import { TextInput, StyleSheet } from 'react-native';

export const Form = () => {
  return (
    <TextInput
      style={styles.input}
      value={''}
      placeholder={'name'}
      onChangeText={() => {}}
    />
  );
};

const styles = StyleSheet.create({
  input: {
    height: 40,
    borderColor: 'gray',
    borderWidth: 1,
    marginBottom: 10,
    paddingHorizontal: 10,
  },
});
