import React, { useState } from 'react';
import { Pressable, Image, TouchableOpacity, Text, View, StyleSheet } from 'react-native';
import { useDispatch } from 'react-redux';
import { addToCart } from '../cart/CartReducer';
import ProductDetails from './ProductDetails';


const ProductItem = ({ item, navigateToProductDetail }) => {
  const [addedToCart, setAddedToCart] = useState(false);
  const dispatch = useDispatch();

  const addItemToCart = (item) => {
    setAddedToCart(true);
    dispatch(addToCart(item));
    setTimeout(() => {
      setAddedToCart(false);
    }, 60000);
  };

  return (
    <Pressable style={localStyles.container}>
      <Image
        style={localStyles.image}
        source={{ uri: item?.image }}
      />

      <TouchableOpacity onPress={navigateToProductDetail}>
        <Text style={localStyles.title}>{item.title}</Text>
      </TouchableOpacity>

      <View style={localStyles.infoContainer}>
        <Text style={localStyles.price}>{item?.price} VND</Text>
      </View>

      <Pressable
        onPress={() => addItemToCart(item)}
        style={localStyles.addToCartButton}
      >
        {addedToCart ? (
          <View>
            <Text>Đã thêm vào giỏ</Text>
          </View>
        ) : (
          <Text>Thêm vào giỏ</Text>
        )}
      </Pressable>
    </Pressable>
  );
};

const localStyles = StyleSheet.create({
  container: {
    marginHorizontal: 20,
    marginVertical: 25,
  },
  image: {
    width: 150,
    height: 150,
    resizeMode: 'contain',
  },
  title: {
    fontSize: 14,
    fontWeight: 'bold',
    width: 150, // Đặt giá trị chiều rộng cố định cho Text
  },
  infoContainer: {
    marginTop: 5,
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between',
  },
  price: {
    fontSize: 15,
    fontWeight: 'bold',
  },
  addToCartButton: {
    backgroundColor: "#00FFFF",
    padding: 10,
    borderRadius: 20,
    justifyContent: "center",
    alignItems: "center",
    marginHorizontal: 10,
    marginTop: 10,
    
  },
});

export default ProductItem;
