package newspaper;

import newspaper.newYorkTimes.NewYorkTimesAndroidClient;
import newspaper.newYorkTimes.NewYorkTimesAppServer;
import newspaper.newYorkTimes.NewYorkTimesiOSClient;
import newspaper.nzz.NZZAndroidClient;
import newspaper.nzz.NZZAppServer;
import newspaper.nzz.NZZiOSClient;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.PrintStream;

import static org.junit.Assert.*;

public class NewspaperAppTest {
    private ByteArrayOutputStream outputStream = new ByteArrayOutputStream();

    @Before
    public void SetUp() {
        System.setOut(new PrintStream(outputStream));
    }

    @After
    public void tearDown() {
        System.setOut(null);
    }

    @Test
    public void testRegisterAndNotify_NewYorkTimes() {
        NewYorkTimesAppServer server = new NewYorkTimesAppServer();
        NewYorkTimesAndroidClient androidClient = new NewYorkTimesAndroidClient();
        NewYorkTimesiOSClient iOSClient = new NewYorkTimesiOSClient();

        server.registerClient(androidClient);
        server.registerClient(iOSClient);

        server.notifyAllCLients();
        assertEquals("This is a android notification from new york times!\r\nThis is a iOS notification from new york times!", outputStream.toString().trim());
    }

    @Test
    public void testRegisterAndNotify_NZZ() {
        NZZAppServer server = new NZZAppServer();
        NZZAndroidClient androidClient = new NZZAndroidClient();
        NZZiOSClient iOSClient = new NZZiOSClient();

        server.registerClient(androidClient);
        server.registerClient(iOSClient);

        server.notifyAllCLients();
        assertEquals("This is a android notification from nzz!\r\nThis is a iOS notification from nzz!", outputStream.toString().trim());
    }

    @Test
    public void testRegisterAndNotify_NewYorkTimes_NZZ() throws IOException {
        NewYorkTimesAppServer newYorkTimesServer = new NewYorkTimesAppServer();
        NewYorkTimesAndroidClient newYorkTimesAndroidClient = new NewYorkTimesAndroidClient();
        NewYorkTimesiOSClient newYorkTimesiOSClient = new NewYorkTimesiOSClient();

        newYorkTimesServer.registerClient(newYorkTimesAndroidClient);
        newYorkTimesServer.registerClient(newYorkTimesiOSClient);

        NZZAppServer nzzServer = new NZZAppServer();
        NZZAndroidClient nzzAndroidClient = new NZZAndroidClient();
        NZZiOSClient nzziOSClient = new NZZiOSClient();

        nzzServer.registerClient(nzzAndroidClient);
        nzzServer.registerClient(nzziOSClient);

        assertEquals(2, nzzServer.countClients());
    }
}