import { ScrollView, Text, View, Pressable, TextInput, ImageBackground } from "react-native";
import React, { useState, useEffect } from "react";
import { AntDesign } from "@expo/vector-icons";
import { useNavigation } from "@react-navigation/native";
import { useDispatch, useSelector } from "react-redux";
import { addToCart } from "../cart/CartReducer";
import axios from "axios";

const ProductDetails = ({ route }) => {
  const { productId, carouselImages, oldPrice, price } = route.params;
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
            style={{ width: 300, height: 300, marginTop: 25, resizeMode: "contain" }}
            source={{ uri: item }}
            key={index}
          />
        ))}
      </ScrollView>

      <View style={{ padding: 10, flexDirection: 'column' }}>
        <Text style={{ fontSize: 15, fontWeight: '500' }}>
          {route.params.title}
        </Text>
        <View style={{ flexDirection: 'row', alignItems: 'center', marginTop: 6 }}>
          <Text style={{ fontSize: 18, fontWeight: '600', marginRight: 5 }}>Giá gốc:</Text>
          {oldPrice && (
            <Text style={{ textDecorationLine: 'line-through', color: 'gray', marginRight: 5 }}>
              {oldPrice} $
            </Text>
          )}
          <Text style={{ fontSize: 18, fontWeight: '600', color: 'red' }}>Giá sale: {price} $</Text>
        </View>
      </View>

      <View style={{ height: 1, borderColor: "#00FFFF", borderWidth: 1 }} />

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

export default ProductDetails;
