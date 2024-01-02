import { Image, StyleSheet, Text, View, ScrollView, Pressable } from "react-native";
import React, { useLayoutEffect, useEffect, useContext, useState } from "react";
import { useNavigation } from "@react-navigation/native";
import { Ionicons, AntDesign } from "@expo/vector-icons";
import axios from "axios";
import { UserType } from "./UserContext";
import { auth } from '../firebase';
import { signOut } from 'firebase/auth';

const ProfileScreen = () => {
  const { userId, setUserId } = useContext(UserType);
  const [orders, setOrders] = useState([]);
  const [loading, setLoading] = useState(true);
  const navigation = useNavigation();

  useLayoutEffect(() => {
    navigation.setOptions({
      headerTitle: "",
      headerStyle: {
        backgroundColor: "#00CED1",
      },
      headerLeft: () => (
        <Text style={{ fontSize: 30, fontWeight: "bold" }}>
          Welcome to {user?.name}
        </Text>
      ),
      headerRight: () => (
        <View
          style={{
            flexDirection: "row",
            alignItems: "center",
            gap: 6,
            marginRight: 12,
          }}
        >
          <Ionicons name="notifications-outline" size={24} color="black" />
          <AntDesign name="search1" size={24} color="black" />
        </View>
      ),
    });
  }, []);

  const [user, setUser] = useState();

  useEffect(() => {
    const fetchUserProfile = async () => {
      try {
        const response = await axios.get(
          `http://localhost:8000/profile/${userId}`
        );
        const { user } = response.data;
        setUser(user);
      } catch (error) {
        console.log("error", error);
      }
    };

    fetchUserProfile();
  }, [userId]); // Thêm userId vào dependency array để useEffect được gọi lại khi userId thay đổi

  const logout = async () => {
    try {
      await signOut(auth);
      console.log("User signed out");
      navigation.replace("Login");
    } catch (error) {
      console.error("Sign out error", error);
    }
  };

  useEffect(() => {
    const fetchOrders = async () => {
      try {
        const response = await axios.get(
          `http://localhost:8000/orders/${userId}`
        );
        const orders = response.data.orders;
        setOrders(orders);
        setLoading(false);
      } catch (error) {
        console.log("error", error);
      }
    };

    fetchOrders();
  }, [userId]); // Thêm userId vào dependency array để useEffect được gọi lại khi userId thay đổi

  console.log("orders", orders);
  console.log("User Data:", user);
  const unsubscribe = auth.onAuthStateChanged((authUser) => {
    if (authUser) {
      // Người dùng đã đăng nhập
      console.log("Auth User:", authUser);
      console.log("User Email:", authUser.email);
    } else {
      // Người dùng chưa đăng nhập
      console.log("User not logged in");
    }
  });

  return (
    <ScrollView style={{ padding: 10, flex: 1, backgroundColor: "white" }}>
      <View style={styles.userInfo}>
        <Image
          source={require('../assets/ssstik.io_1686019921822.jpeg')}
          style={styles.userImage}
        />
        <Text style={styles.userName}>Welcome {user?.email}</Text>
      </View>

      <View style={styles.actionButtonContainer}>
        <Pressable
          style={styles.actionButton}
          onPress={() => {
            /* Add functionality for the "Thông tin tài khoản" button */
          }}
        >
          <Text style={styles.actionButtonText}>Thông tin tài khoản</Text>
        </Pressable>
      </View>

      <View style={styles.actionButtonContainer}>
        <Pressable
          onPress={logout}
          style={styles.actionButton}
        >
          <Text style={styles.actionButtonText}>Đăng xuất</Text>
        </Pressable>
      </View>
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  userInfo: {
    alignItems: "center",
    marginBottom: 20,
  },
  userImage: {
    width: 100,
    height: 100,
    borderRadius: 50,
    marginBottom: 10,
  },
  userName: {
    fontSize: 18,
    fontWeight: "bold",
  },
  actionButtonContainer: {
    flexDirection: "row",
    alignItems: "center",
    gap: 10,
    marginTop: 12,
  },
  actionButton: {
    padding: 10,
    backgroundColor: "#E0E0E0",
    borderRadius: 25,
    flex: 1,
  },
  actionButtonText: {
    textAlign: "center",
  },
});

export default ProfileScreen;
