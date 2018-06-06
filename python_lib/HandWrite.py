# coding: utf-8
import sys
import os

# exit codes:
# 1: missing path argument
# 2: other errors


args = sys.argv
if len(args) == 2:

    try:
        import numpy as np
        import keras
        from PIL import Image
        from keras.models import load_model

        model_path = os.path.join(os.path.dirname(args[0]), 'model/model_hand_write.h5')
        model = load_model(model_path)

        image_path = args[1]

        image_path = '{}{}'.format(image_path, '.png')
        img = Image.open(image_path).convert("L")
        img = img.resize((28,28))
        input_image = np.invert(img).reshape(-1, 1, 28, 28)/255.

        prediction = str(model.predict(input_image).argmax())
        print(prediction)


    except Exception as e:
        print(e)
        sys.exit('2')

else:
    sys.exit('1')
