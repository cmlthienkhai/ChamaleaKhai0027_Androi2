// LoginScreen.js
import React, { useState } from 'react';
import { View, Text, TextInput, Button, StyleSheet, Pressable } from 'react-native';
import { comparePassword, findUserByUsername } from '../api/lg';
import { useNavigation } from '@react-navigation/native';

const LoginScreen = () => {
  const navigation = useNavigation();
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');

  const handleLogin = async () => {
    try {
      const user = findUserByUsername(username);

      if (user) {
        const isPasswordValid = await comparePassword(password, user.password);

        if (isPasswordValid) {
          // Đăng nhập thành công, chuyển hướng đến màn hình chính
          navigation.navigate('Main');
          console.log('Đăng nhập thành công!');
        } else {
          // Mật khẩu không đúng
          console.error('Mật khẩu không đúng.');
        }
      } else {
        // Người dùng không tồn tại
        console.error('Người dùng không tồn tại.');
      }
    } catch (error) {
      console.error('Lỗi khi đăng nhập:', error.message);
    }
  };

  return (
    <View style={styles.container}>
      <Text style={styles.header}>Đăng Nhập</Text>
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          placeholder="Tên người dùng"
          value={username}
          onChangeText={(text) => setUsername(text)}
        />
        <TextInput
          style={styles.input}
          placeholder="Mật khẩu"
          value={password}
          onChangeText={(text) => setPassword(text)}
          secureTextEntry
        />
      </View>
      <Button title="Đăng nhập" onPress={handleLogin} />
      <Pressable onPress={() => console.log('Chuyển đến trang đăng ký')}>
        <Text style={styles.link}>Bạn chưa có tài khoản? Đăng ký ngay</Text>
      </Pressable>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 16,
  },
  header: {
    fontSize: 20,
    fontWeight: 'bold',
    marginBottom: 20,
  },
  inputContainer: {
    width: '100%',
    marginBottom: 20,
  },
  input: {
    height: 40,
    borderColor: 'gray',
    borderBottomWidth: 1,
    marginBottom: 10,
  },
  link: {
    color: 'blue',
    marginTop: 10,
  },
});

export default LoginScreen;
