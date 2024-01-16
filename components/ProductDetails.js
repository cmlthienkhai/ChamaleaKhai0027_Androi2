import {StyleSheet,Text,View,ScrollView,Pressable,TextInput,ImageBackground,Dimensions,} from "react-native";
import React, { useState, useEffect } from "react";
import { AntDesign, Feather } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useNavigation, useRoute } from "@react-navigation/native";
import { MaterialCommunityIcons } from "@expo/vector-icons";
import { useDispatch, useSelector } from "react-redux";
import { addToCart } from "../cart/CartReducer";

const productDetails = ({ route }) => {
  const { productId, carouselImages, title, oldPrice, price } = route.params;
  const { width } = Dimensions.get("window");
  const navigation = useNavigation();
  const [addedToCart, setAddedToCart] = useState(false);
  const dispatch = useDispatch();
  const [productDetail, setProductDetail] = useState(null);
  const addItemToCart = () => {
    if (route.params && route.params.id && !addedToCart) {
      console.log('Adding item to cart:', route.params);
      setAddedToCart(true);
      dispatch(addToCart(route.params));
      setTimeout(() => {
        setAddedToCart(false);
      }, 60000);
    } else {
      console.error('Invalid item or already added to cart:', route.params);
    }
  };
  const cart = useSelector((state) => state.cart.cart);
  console.log(cart);

  const fetchProductDetail = async (productId) => {
    try {
      const response = await axios.get(`https://fakestoreapi.com/products/${productId}`);
      const productDetail = response.data;
      console.log('Info:', productDetail);
      setProductDetail(productDetail);
    } catch (error) {
      console.error('Lỗi khi tìm chi tiết sản phẩm:', error);
    }
  };
  useEffect(() => {
    console.log('Product ID:', productId);
    if (!productDetail && productId) {
      fetchProductDetail(productId);
    }
  }, [productId, productDetail]);
  const navigateToProductDetail = () => {
    navigation.navigate('Info', { productId });
  };

  return (
    <ScrollView
      style={{ marginTop: 55, flex: 1, backgroundColor: "white" }}
      showsVerticalScrollIndicator={false}
    >
      <View
        style={{
          backgroundColor: "#00FFFF",
          padding: 10,
          flexDirection: "row",
          alignItems: "center",
        }}
      >
        <Pressable
          style={{
            flexDirection: "row",
            alignItems: "center",
            marginHorizontal: 7,
            gap: 10,
            backgroundColor: "white",
            borderRadius: 3,
            height: 38,
            flex: 1,
          }}
        >
          <AntDesign
            style={{ paddingLeft: 10 }}
            name="search1"
            size={22}
            color="black"
          />
          <TextInput placeholder=" " />
        </Pressable>

      </View>

      <ScrollView horizontal showsHorizontalScrollIndicator={false}>
        {carouselImages && carouselImages.map((item, index) => (
          <ImageBackground
            style={{ width, height: (width * 100) / 100, marginTop: 25, resizeMode: "contain" }}
            source={{ uri: item }}
            key={index}
          >
            <View
              style={{
                padding: 20,
                flexDirection: "row",
                alignItems: "center",
                justifyContent: "space-between",
              }}
            >
              <View
                style={{
                  width: 40,
                  height: 40,
                  borderRadius: 20,
                  justifyContent: "center",
                  alignItems: "center",
                  flexDirection: "row",
                }}
              >
              </View>
            </View>
          </ImageBackground>
        ))}
      </ScrollView>

      <View style={{ padding: 10, flexDirection: 'column' }}>
        <Text
          style={{ fontSize: 15, fontWeight: '500' }}
        >
          {title}
        </Text>

        <View style={{ flexDirection: 'row', alignItems: 'center', marginTop: 6 }}>
          <Text style={{ fontSize: 18, fontWeight: '600', marginRight: 5 }}>Giá gốc:</Text>
          {oldPrice && (
            <Text style={{ textDecorationLine: 'line-through', color: 'gray', marginRight: 5 }}>
              {oldPrice} VND
            </Text>
          )}
          <Text style={{ fontSize: 18, fontWeight: '600', color: 'red' }}>Giá sale: {price} VND</Text>
        </View>
      </View>

      <Text style={{ height: 1, borderColor: "#00FFFF", borderWidth: 1 }} />

      <View style={{ padding: 10 }}>
        <View style={{ flexDirection: "row", marginVertical: 5, alignItems: "center", gap: 5 }}>
        </View>
      </View>

      <Pressable
        onPress={addItemToCart}
        style={{
          backgroundColor: "#00FFFF",
          padding: 10,
          borderRadius: 20,
          justifyContent: "center",
          alignItems: "center",
          marginHorizontal: 10,
          marginVertical: 10,
        }}
      >
        {addedToCart ? (
          <View>
            <Text>Đã thêm vào giỏ</Text>
          </View>
        ) : (
          <Text>Thêm vào giỏ</Text>
        )}
      </Pressable>

      <Pressable
        style={{
          backgroundColor: "#00FFFF",
          padding: 10,
          borderRadius: 20,
          justifyContent: "center",
          alignItems: "center",
          marginHorizontal: 10,
          marginVertical: 10,
        }}
      >
        <Text>Mua Ngay</Text>
      </Pressable>
    </ScrollView>
  );
};
export default productDetails;

const styles = StyleSheet.create({});
